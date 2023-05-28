<?php
    session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Styles/Review.css" />
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
        <!-- <?php
                    if($_SESSION['user']){
                        echo '<a style="float: right" href="PHPScripts/exit.php">Выход</a><p style="float: right">' . $_SESSION['user']['name'] . '</p> ';
                    }
                    else{
                        echo '
                        <a href="Auth.php"> <img style="float: right; margin-top: 5px;" src="Icons/log-in.png" width="55" height="55"/></a>';
                    }
                ?> -->
        <a class="auth" href="Reg.php">
                    <img
                      style="float: right; margin-top: 5px"
                      src="Icons/log-out.png"
                      width="55"
                      height="55"
                    />
                </a>
      </div>
    </header>
    <main class="intro">
      <form class="container" action="PHPScripts/signin.php" method="post">
        <div
          style="width: 80%; height: 10%; text-align: center; margin: auto"
        >
          <h1 style="color: #333333; font-size: 24px; display: inline-block">
            Отзыв
          </h1>
        </div>
          <div class="input_info">
            <textarea maxlength="200" type = "text" class="reviewInput" placeholder="Максимальная длина отзыва - 200 символов" ></textarea>
          </div>
        <button type="submit" class="btn" >Отправить</button>
      </form>
    </main>
  </body>
</html>
