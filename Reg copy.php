<?php
    session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Styles/Reg.css" />
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
      </div>
    </header>
    <main class="intro">
      <form class="container" action="vendor/signup.php" method="post">
        <div style="width: 80%; height: 10%; text-align: center; margin: 0 auto">
          <h1 style="color: #333333; font-size: 24px; display: inline-block">
            Регистрация
          </h1>
        </div>
        <div class="input_fields">
          <div class="search">
            <input name="Name" style="padding-left: 5px" placeholder="Имя пользователя" />
            <a class="searcha"> </a>
          </div>
          <div class="search">
            <input name="Login" style="padding-left: 5px" placeholder="Логин" />
            <a class="searcha"> </a>
          </div>
          <div class="search">
            <input name="Password" type="password" style="padding-left: 5px" placeholder="Пароль" />
            <a class="searcha"> </a>
          </div>
          <div class="search">
            <input name="PasswordConfirm" type="password" style="padding-left: 5px" placeholder="Повторите пароль" />
            <a class="searcha"> </a>
          </div>
        </div>
        <button class="btn">Регистрация</button>
        <?php
            if($_SESSION['message']){
                echo '<p>' . $_SESSION['message'] . '</p>';
            }
            unset($_SESSION['message'])
        ?>
      </form>
    </main>
  </body>
</html>
