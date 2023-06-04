<?php
    session_start();
    if (isset($_GET['game'])) {
        $_SESSION['game'] = $_GET['game'];
        $_SESSION['page'] = $_SERVER['PHP_SELF'];
        header('Location: PHPScripts/gameOpen.php');
    }
    else{
        $game = $_SESSION['game']['gameLink'];
        $newUrl = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '?game=' . $game;
        echo '<script>
            var newUrl = "' . $newUrl . '";
            window.history.pushState({ path: newUrl }, "", newUrl);
        </script>';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        
        <link rel="stylesheet" href="/Styles/gamepage.css">
        <title>
            <?php echo $_SESSION['game']['gameName'] ?>
        </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="headercontainer">
              <a href="index.php">
                <img
                  style="float: left"
                  src="Icons/free-icon-game-controller-1068778.png"
                  width="70"
                  height="70"
                />
              </a>
              <div class="search">
                <input
                  style="padding-left: 5px"
                  placeholder="Найди свою любимую игру..."
                />
                <a class="searcha" , href="">
                  <div class="searchbutton">
                    <h1 style="color: #ffffff">Поиск</h1>
                  </div>
                </a>
                </div>
                <?php
                    if($_SESSION['user']){
                        echo '<a class="auth" href="PHPScripts/exit.php" width="55" height="55""> <img style="float: right; margin-top: 5px" src="Icons/log-out.png"
                       width="55" height="55"></a><p style="margin-right: 15px; float: right; text-alaign: center; font-size: 19px" >' . $_SESSION['user']['name'] . '</p> ';
                    }
                    else{
                        echo '
                        <a href="Auth.php"> <img style="float: right; margin-top: 5px;" src="Icons/log-in.png" width="55" height="55"/></a>';
                    }
                ?>
            </div>
          </header>
        <div class="intro">
            <main class="container">
                <?php
                 echo '<img src = ' . $_SESSION['game']['bigCover'] . ' class="bodyicon"/>';
                ?>
                <h1 style="margin-left: 30px; margin-top: 5px; margin-bottom: 5px;"><?php echo $_SESSION['game']['gameName'] ?></h1>
                <section class="gameinfo">
                    <?php
                        echo '<img src = ' . $_SESSION['game']['miniCover'] . ' class="gameicon"/>';
                    ?>
                    <div class="maininfo">
                        <div class="universal">
                            <h1>Разработчик</h1>
                            <h1>Издатель</h1>
                            <h1>Платформы</h1>
                            <h1>Жанр</h1>
                            <h1>Дата выхода</h1>
                        </div>
                        <div class="notuniversal">
                            <?php
                                echo '<h1>'. $_SESSION['game']['developer'] .'</h1>';
                                echo '<h1>'. $_SESSION['game']['publisher'] .'</h1>';
                            ?>
                            <h1>PC|PS4|PS5|XBOXSX|XONE</h1>
                            <?php
                                echo '<h1>'. $_SESSION['game']['genre'] .'</h1>';
                                echo '<h1>'. $_SESSION['game']['releaseDate'] .'</h1>';
                            ?>
                        </div>
                        <div class="platformsicons">
                            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"> <img src="Icons/playstation-logotype.png" width="32" height="32"/> </a>
                            <img src="Icons/xbox-logo.png" width="32" height="32"/>
                            <img src="Icons/steam.png" width="32" height="32"/>
                            <img src="Icons/vk.png" width="32" height="32"/>
                        </div>
                    </div>
                    <div class="description">
                        <h1 style="margin: 0; color: #7a7a7a;">Описание:</h1>
                        <?php
                            echo '<p style="margin: 0; color: #1b1b1b;">'. $_SESSION['game']['description'] . '</p>';
                        ?>
                    </div>
                    <a style="float: left; width: 2px; height: 80%; background-color:#dadada; margin-top: 25px; margin-left:25px ;"></a>
                    <div class="grades">
                        <div class="grade">
                            <h1 style="color: #ffffff;">7</h1>
                        </div>
                        <h1>Моя оценка</h1>
                        <div class="grade">
                            <h1 style="color: #ffffff;">8.6</h1>
                        </div>
                        <h1>Оценка пользователей</h1>
                    </div>
                </section>

                
                <div class="sist_treb">
                    <h1>Системные требования:</h1>
                    <div class = "sist_treb_min">
                        <h2>Минимальные</h2>
                        <div class="st_left">
                            <p>ОС:</p>
                            <p>Процессор:</p>
                            <p>Оперативная память:</p>
                            <p>Видеокарта:</p>
                            <p>DirectX:</p>
                            <p>Место на диске:</p>
                        </div>
                        <div class="st_right">
                            <p>Windows 10</p>
                            <p>Intel Core i5-3570K or AMD FX-8310</p>
                            <p>8 GB ОЗУ</p>
                            <p>NVIDIA GeForce GTX 970 or AMD Radeon RX 470</p>
                            <p>Версии 12</p>
                            <p>70 GB SSD</p>
                        </div>
                    </div>
                    <div class = "sist_treb_rec">
                        <h2>Рекомендуемые</h2>
                        <div class="st_left">
                            <p>ОС:</p>
                            <p>Процессор:</p>
                            <p>Оперативная память:</p>
                            <p>Видеокарта:</p>
                            <p>DirectX:</p>
                            <p>Место на диске:</p>
                        </div>
                        <div class="st_right">
                            <p>Windows 10</p>
                            <p> Intel Core i7-4790 or AMD Ryzen 3 3200G</p>
                            <p>12 GB ОЗУ</p>
                            <p>GTX 1060 6GB / GTX 1660 Super or Radeon RX 590</p>
                            <p>Версии 12</p>
                            <p>70 GB SSD</p>
                        </div>
                    </div>
                </div>
                <section class="reviewH">
                        <h style="font-weight: 900; font-size: 30px; margin-left: 30px; width: 100px">Отзывы</h>
                        <?php 
                        if($_SESSION['user']){
                            if ($_SESSION['game']['foundReview']) echo '<a class="reviewButton" style="width: 7.5rem" href="Review.php">Редактировать</a>';
                            else echo '<a class="reviewButton" href="Review.php">Написать</a>';
                        }
                        else echo '<a class="reviewButton" href="Auth.php">Написать</a>';
                        ?>
                </section>
                <section class = "reviews"> 
                        <?php
                            $cnt = 3;
                            $likeIcon = 'Icons/like(2).png';
                            $dislikeIcon = 'Icons/dislike(2).png';
                            if ($_SESSION['game']['foundReview']){
                                $cnt = 2;
                                $currentReview = $_SESSION['game']['foundReview'];
                                echo '<div class = "review">
                                <div class = "reviewer">
                                <h1 style="color: #ffffff; float: left; font-size: 15px; margin-left: 10px; margin-top: 12px;">' . $currentReview['userName'] . '</h1>
                                <img style="float: right; margin-right: 10px; margin-top: 10px;" src="'. $likeIcon .'" width="25" height="25">
                                <img style="float: right; margin-right: 10px; margin-top: 16px;" src="' . $dislikeIcon . '" width="25" height="25">
                                </div>
                                <h1 style="color: #1b1b1b;; float: left; font-size: 13px; margin-left: 10px;">' .  $currentReview['reviewSod'] . '</h1>
                                </div>';
                            }
                            for ($i = 0; $i < $cnt; $i++) {
                                $currentReview = $_SESSION['review'][$i];
                                if ($currentReview){
                                    if ($currentReview === $_SESSION['game']['foundReview']) {$cnt += 1; continue;}
                                if ($_SESSION['reactions']){
                                    $reacts = $_SESSION['reactions'];
                                    for ($j = 0; $j < count($reacts); $j++){
                                       if($reacts[$j]['reviewId'] === $currentReview['reviewId']){
                                           if($reacts[$j]['reaction'] === 'b'){
                                               $likeIcon = 'Icons/like(2).png';
                                               $dislikeIcon = 'Icons/dislike(1).png';
                                               break;
                                           }
                                           else {
                                               $likeIcon = 'Icons/like.png';
                                               $dislikeIcon = 'Icons/dislike(2).png';
                                           }
                                       }
                                    }
                                }
                                echo '<div class = "review">
                                <div class = "reviewer">
                                    <h1 style="color: #ffffff; float: left; font-size: 15px; margin-left: 10px; margin-top: 12px;">' . $currentReview['userName'] . '</h1>
                                    <img style="float: right; margin-right: 10px; margin-top: 10px;" src="'. $likeIcon .'" width="25" height="25">
                                    <img style="float: right; margin-right: 10px; margin-top: 16px;" src="' . $dislikeIcon . '" width="25" height="25">
                                </div>
                                <h1 style="color: #1b1b1b;; float: left; font-size: 13px; margin-left: 10px;">' .  $currentReview['reviewSod'] . '</h1>
                                </div>';
                                }
                            }
                        ?>
                </section>
            </main>
        </div>
    </body>
</html>
