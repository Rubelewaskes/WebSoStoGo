<?php
    session_start();
    require_once 'connect.php';
    $gameName = $_SESSION['game'];
    $query = "SELECT * FROM `games` where `gameLink` = '$gameName';";
    $foundGame = mysqli_fetch_assoc(mysqli_query($connect, $query));
    if ($foundGame){
        $gameId = $foundGame['gameId'];
        $query = "SELECT r.reviewId, r.reviewSod, u.userName FROM `reviews` r JOIN `users` u ON r.userId = u.userId WHERE `r`.`gameId` = '$gameId' ORDER BY `r`.`reviewId` DESC;";
        $review = mysqli_fetch_all(mysqli_query($connect, $query), MYSQLI_ASSOC);
        if ($_SESSION['user']){
            $user = $_SESSION['user']['id'];
            $query = "SELECT r.reviewId, r.reviewSod, u.userName FROM `reviews` r JOIN `users` u ON r.userId = u.userId WHERE `r`.`userId` = $user AND `r`.`gameId` = '$gameId'";
            $foundReview = mysqli_fetch_assoc(mysqli_query($connect, $query));
            $query = "SELECT rR.reviewId, rR.reaction FROM `reviewsReacts` rR JOIN `reviews` r ON rR.reviewId = r.reviewId WHERE `r`.`gameId` = '$gameId' AND `rR`.`userId` = '$user';";
            $reactions = mysqli_fetch_all(mysqli_query($connect, $query), MYSQLI_ASSOC);
            $_SESSION['reactions'] = $reactions;
        }
        $_SESSION['game'] = [
            "gameId" => $foundGame['gameId'],
            "gameName" => $foundGame['gameName'],
            "bigCover" => $foundGame['bigCover'],
            "miniCover" => $foundGame['miniCover'],
            "developer" => $foundGame['developer'],
            "publisher" => $foundGame['publisher'],
            "genre" => $foundGame['genre'],
            "releaseDate" => date('d.m.Y', strtotime($foundGame['releaseDate'])),
            "description" => $foundGame['description'],
            "gameLink" => $foundGame['gameLink'],
            "foundReview" => $foundReview
            ];
        $_SESSION['review'] = $review;

        header('Location: ' . $_SESSION['page']);
    }
    else{
        header('Content-Type: text/html; charset=utf-8');
        print_r("Игра с этим именем не найдена");
    }
?>
