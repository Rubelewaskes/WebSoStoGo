<?php
    session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Styles/index.css" />
    <title>SSG - лучший игровой портал/</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
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
                echo '<a style="float: right" href="PHPScripts/exit.php">Выход</a><p style="float: right">' . $_SESSION['user']['name'] . '</p> ';
            }
            else{
                echo '
                <a href="Auth.php">
                    <img
                    style="float: right"
                    src="Icons/auth.png"
                    width="60"
                    height="60"
                    />
                </a>';
            }
            
        ?>
      </div>
    </header>
    <main class="intro">
      <div class="container">
        <div class="navigation">
          <div class="tab" style="margin-left: 0">Игры</div>
          <div class="tab" style="background-color: #7a7a7a">Коллекции</div>
          <div class="tab" style="background-color: #7a7a7a">Мой рейтинг</div>
          <div class="tab" style="background-color: #7a7a7a">
            Рейтинг пользователей
          </div>
          <div class="options">Опции</div>
        </div>
        <section class="gamelist">
          <div class="game">
            <a href="Atomic_Heart.php"><img src="Images/miniCover/56297_Atomic_Heart.jpg"/></a>
            <div class="info">
              <h1>Atomic Heart</h1>
              <h2>Разработчк</h2>
              <h3>Mundfish</h3>
              <h2>Издатель</h2>
              <h3>Mundfish</h3>
              <h2>Жанр</h2>
              <h3>Шутер</h3>
              <h2>Дата выхода</h2>
              <h3>21.02.2023</h3>
            </div>
            <div class="ratings">
              <div class="grade">7</div>
              <div class="grade">8.6</div>
            </div>
          </div>
          <div class="game">
            <a href="Cyberpunk2077.php"><img src="Images/miniCover/Cyberpunk2077.png" /></a>
            <div class="info">
              <h1>Cyberpunk 2077</h1>
              <h2>Разработчк</h2>
              <h3>CD Project Red</h3>
              <h2>Издатель</h2>
              <h3>CD Project Red</h3>
              <h2>Жанр</h2>
              <h3>Экшен-RPG</h3>
              <h2>Дата выхода</h2>
              <h3>10.12.2020</h3>
            </div>
            <div class="ratings">
              <div class="grade">7</div>
              <div class="grade">8.6</div>
            </div>
          </div>
          <div class="game">
            <a href="Horizon.php"><img src="Images/miniCover/Horizon.png" /></a>
            <div class="info">
              <h1>Horizon: Forbidden West</h1>
              <h2>Разработчк</h2>
              <h3>Guerilla Games</h3>
              <h2>Издатель</h2>
              <h3>PlayStation Stoudios</h3>
              <h2>Жанр</h2>
              <h3>Экшен-RPG</h3>
              <h2>Дата выхода</h2>
              <h3>18.02.2022</h3>
            </div>
            <div class="ratings">
              <div class="grade">7</div>
              <div class="grade">8.6</div>
            </div>
          </div>
          <div class="game">
            <a href="RE4.php"><img src="Images/miniCover/RE4.png" /></a>
            <div class="info">
              <h1>Resident Evil 4 (2023)</h1>
              <h2>Разработчк</h2>
              <h3>Capcom</h3>
              <h2>Издатель</h2>
              <h3>Capcom</h3>
              <h2>Жанр</h2>
              <h3>Хоррор</h3>
              <h2>Дата выхода</h2>
              <h3>24.03.2023</h3>
            </div>
            <div class="ratings">
              <div class="grade">7</div>
              <div class="grade">8.6</div>
            </div>
          </div>
          <div class="game">
            <a href="SMMM.php"><img src="Images/miniCover/SMMM.png" /></a>
            <div class="info">
              <h1>Marvel's Spider-Man: Miles Morales</h1>
              <h2>Разработчк</h2>
              <h3>Insomniac Games</h3>
              <h2>Издатель</h2>
              <h3>PlayStation Studios</h3>
              <h2>Жанр</h2>
              <h3>Экшен от 3 лица</h3>
              <h2>Дата выхода</h2>
              <h3>12.11.2020</h3>
            </div>
            <div class="ratings">
              <div class="grade">7</div>
              <div class="grade">8.6</div>
            </div>
          </div>
          <div class="game">
            <a href="Hogwarts.php"><img src="Images/miniCover/Hogwarts.png" /></a>
            <div class="info">
              <h1>Hogwarts Legacy</h1>
              <h2>Разработчк</h2>
              <h3>Avalanche Software</h3>
              <h2>Издатель</h2>
              <h3>WB Games</h3>
              <h2>Жанр</h2>
              <h3>Экшен-RPG</h3>
              <h2>Дата выхода</h2>
              <h3>10.02.2023</h3>
            </div>
            <div class="ratings">
              <div class="grade">7</div>
              <div class="grade">8.6</div>
            </div>
          </div>
        </section>
      </div>
    </main>
  </body>
</html>
