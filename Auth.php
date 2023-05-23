<?php
    session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Styles/Auth.css" />
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
      <form class="container" style="max-height: 35%" action="PHPScripts/signin.php" method="post">
        <div
          style="width: 80%; height: 10%; text-align: center; margin: 0 auto"
        >
          <h1 style="color: #333333; font-size: 24px; display: inline-block">
            Авторизация
          </h1>
        </div>
        <div class="input_fields" style="height: 120px">
          <div class="input_info">
            <input class="input" name="login" placeholder="Логин" />
          </div>
          <div  class="input_info">
            <input
              class="input"
              name="password"
              type="password"
              placeholder="Пароль"
            />
          </div>
        </div>
        <button type="submit" class="btn" style="width: 6rem; height: 3rem; margin: 50px auto">Войти</button>
        <p>Нет аккаунта? <a href="Reg.php">Регистрация</a></p>
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
