<?php
    session_start();
    require_once 'connect.php';
    $recaptchaResponse = $_POST['g-recaptcha-response'];
    $recaptchaSecretKey = '6LemcUsmAAAAABnX9TQ4RtB7G0AAsE7-fYZWKJV-';
    $recaptchaUrl = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptchaData = [
        'secret' => $recaptchaSecretKey,
        'response' => $recaptchaResponse
    ];

    $recaptchaOptions = [
        'http' => [
            'method' => 'POST',
            'header' => 'Content-type: application/x-www-form-urlencoded',
            'content' => http_build_query($recaptchaData)
        ]
    ];

    $recaptchaContext = stream_context_create($recaptchaOptions);
    $recaptchaResult = file_get_contents($recaptchaUrl, false, $recaptchaContext);
    $recaptchaResponseData = json_decode($recaptchaResult);
    if ($recaptchaResponseData->success){
        $reviewSod = htmlspecialchars($_POST['sod']);
        $userId = htmlspecialchars($_SESSION['user']['id']);
        $gameId = htmlspecialchars($_SESSION['game']['gameId']);
        if ($reviewSod){
            if ($_SESSION['game']['foundReview']){
                if(isset($_POST['save'])){
                    $query = "UPDATE `reviews` SET `reviewSod` = '$reviewSod' WHERE `userId` = '$userId' AND `gameId` = '$gameId'";
                    mysqli_query($connect, $query);
                    header('Location: ' . $_SESSION['page']);
                }
                else if (isset($_POST['delete'])){
                    $query = "DELETE FROM `reviews` WHERE `userId` = '$userId' AND `gameId` = '$gameId'";
                    mysqli_query($connect, $query);
                    header('Location: ' . $_SESSION['page']);
                }
            }
            else{
                $link = "../game.php?game=" . $_SESSION['gameLink'];
                $query = "INSERT INTO `reviews` (`userId`, `gameId`, `reviewSod`) VALUES ('$userId', '$gameId', '$reviewSod')";
                mysqli_query($connect, $query);
                header('Location: ' . $_SESSION['page']);
            }
        }
        else {
            $_SESSION['message'] = 'Поле не должно быть пустым';
            header('Location: ../Review.php');
        }
    }
    else {
        $_SESSION['message'] = 'Машина не пройдёт!';
            header('Location: ../Review.php');
    }
?>