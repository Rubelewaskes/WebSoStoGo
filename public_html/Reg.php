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
      <form class="container" style="max-height: 65%" action="PHPScripts/signup.php" method="post">
        <div style="width: 80%; height: 10%; text-align: center; margin: 0 auto">
          <h1 style="color: #333333; font-size: 24px; display: inline-block">
            Регистрация
          </h1>
        </div>
        <div style = "margin-buttom: 20px; height: 52%" class="input_fields">
          <div class="input_info">
            <input class="input" name="Name" placeholder="Имя пользователя" />
          </div>
          <div class="input_info">
            <input class="input" name="Login" placeholder="Логин" />
          </div>
          <div class="input_info">
            <input class="input" name="Password" type="password" placeholder="Пароль" />
          </div>
          <div class="input_info">
            <input class="input" name="PasswordConfirm" type="password" placeholder="Повторите пароль" />
          </div>
          <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        </div>
        <div style="margin-left: 35px; margin-bottom: 15px" class="g-recaptcha" data-sitekey="6LemcUsmAAAAAMOCJzbZmyPo0ySngVl6zAUXy5xj"></div>
        <button class="btn" style = "width: 12rem">Регистрация</button>
        <p style="margin-left: 70px">Уже есть аккаунт? <a style=" text-decoration: none; color: #43a4ff" href="Auth.php">Авторизация<a></a></p>
        
        <?php
            if($_SESSION['message']){
                echo '<p>' . $_SESSION['message'] . '</p>';
            }
            unset($_SESSION['message']);
        ?>
      </form>
    </main>
  </body>
</html>