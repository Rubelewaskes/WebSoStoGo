<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Styles/gamepage.css">
        <title>
            Hogwarts Legacy
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
                <?php
                    if($_SESSION['user']){
                        echo '<a style="float: right" href="PHPScripts/exit.php">Выход</a><p style="float: right">' . $_SESSION['user']['name'] . '</p> ';
                    }
                    else{
                        echo '
                        <a href="Auth.php"> <img style="float: right" src="Icons/auth.png" width="60" height="60"/></a>';
                    }
                ?>
              </div>
            </div>
          </header>
        <div class="intro">
            <main class="container">
                <img src = "Images/bigCover/Hogwarts.jpg" class="bodyicon"></img>
                <h1 style="margin-left: 30px; margin-top: 5px; margin-bottom: 5px;">Hogwarts Legacy</h1>
                <section class="gameinfo">
                    <img src = "Images/miniCover/Hogwarts.png" class="gameicon"/>
                    <div class="maininfo">
                        <div class="universal">
                            <h1>Разработчик</h1>
                            <h1>Издатель</h1>
                            <h1>Платформы</h1>
                            <h1>Жанр</h1>
                            <h1>Дата выхода</h1>
                        </div>
                        <div class="notuniversal">
                            <h1>Avalanche Software</h1>
                            <h1>WB Games</h1>
                            <h1>PC|PS4|PS5|XBOXSX|XONE</h1>
                            <h1>Экшен-RPG</h1>
                            <h1>10.02.2023</h1>
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
                        <h2 style="margin: 0; color: #1b1b1b;">
                            Компьютерная игра в жанре action/RPG, разработанная американской студией Avalanche Software и изданная Warner Bros. Interactive Entertainment под лейблом Portkey Games. Действие игры разворачивается в фэнтезийной вселенной «Гарри Поттера» в XIX веке.
                        </h1>
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
                    <h1>Системные требования</h1>
                </div>
                <section class = "reviews"> 
                        <h1 style="font-size: 30px; margin-left: 30px;">Отзывы</h1>
                        <div class = "review">
                            <div class = "reviewer">
                                <h1 style="color: #ffffff; float: left; font-size: 15px; margin-left: 10px; margin-top: 12px;">Lord Rubelewaskes</h1>
                                <img style="float: right; margin-right: 10px; margin-top: 10px;" src="Icons/like.png" width="25" height="25">
                                <img style="float: right; margin-right: 10px; margin-top: 16px;" src="Icons/dislike (2).png" width="25" height="25">
                            </div>
                            <h1 style="color: #1b1b1b;; float: left; font-size: 13px; margin-left: 10px;">Отличная игра всем советую, правда очень легкая.</h1>
                        </div>

                        <div class = "review">
                            <div class = "reviewer">
                                <h1 style="color: #ffffff; float: left; font-size: 15px; margin-left: 10px; margin-top: 12px;">nukieXL</h1>
                                <img style="float: right; margin-right: 10px; margin-top: 10px;" src="Icons/like (2).png" width="25" height="25">
                                <img style="float: right; margin-right: 10px; margin-top: 16px;" src="Icons/dislike (1).png" width="25" height="25">
                            </div>
                            <h1 style="color: #1b1b1b;; float: left; font-size: 13px; margin-left: 10px;">Очень душно. ОЧЕНЬ ДУШНО.</h1>
                        </div>

                        <div class = "review">
                            <div class = "reviewer">
                                <h1 style="color: #ffffff; float: left; font-size: 15px; margin-left: 10px; margin-top: 12px;">TheOneDarkER</h1>
                                <img style="float: right; margin-right: 10px; margin-top: 10px;" src="Icons/like (2).png" width="25" height="25">
                                <img style="float: right; margin-right: 10px; margin-top: 16px;" src="Icons/dislike (2).png" width="25" height="25">
                            </div>
                            <h1 style="color: #1b1b1b;; float: left; font-size: 13px; margin-left: 10px;">Слава Советскому Союзу!</h1>
                        </div>
                </section>

            </main>
        </div>
    </body>
</html>