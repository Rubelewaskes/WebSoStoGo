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

    if ($recaptchaResponseData->success) {
    $name = htmlspecialchars($_POST['Name']);
    $login = htmlspecialchars($_POST['Login']);
    $password = htmlspecialchars($_POST['Password']);
    $passwordConfirm = htmlspecialchars($_POST['PasswordConfirm']);
    if($name !== '' and  $login !== '' and $password !== '' and $passwordConfirm !== ''){
        if($password === $passwordConfirm){
            $login = md5($login);
            $query = "SELECT COUNT(*) as 'cnt' FROM `users` where `userLogin` = '$login' OR `userName`='$name'";
            $result = mysqli_fetch_assoc(mysqli_query($connect, $query));
            if($result['cnt'] === '0'){
                $password = password_hash($password + 'p6a1t', PASSWORD_DEFAULT);
                $query = "INSERT INTO `users` (`userId`, `userName`, `userLogin`, `userPassword`) VALUES ('','$name', '$login', '$password')";
                mysqli_query($connect, $query);
                $_SESSION['message'] = 'Регистрация успешна';
                header('Location: ../Auth.php');
            }
            else{
                $_SESSION['message'] = 'Пользователь с таким логином или именем уже существует';
                header('Location: ../Reg.php');
            }
        }
        else{
            $_SESSION['message'] = 'Пароли не совпадают';
            header('Location: ../Reg.php');
        }
    }
    else{
        $_SESSION['message'] = 'Поля не должны быть пустыми';
        header('Location: ../Reg.php');
    }
    }
    else{
        $_SESSION['message'] = 'Машина не пройдёт!';
        header('Location: https://www.youtube.com/watch?v=E44et_OITiA');
    }

?>


    