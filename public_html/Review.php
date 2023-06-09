<?php
    session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Styles/Review.css" />
    <title>SSG - лучший игровой портал</title>
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
      <form class="container" action="PHPScripts/reviewCommit.php" method="post">
        <div
          style="width: 80%; height: 10%; text-align: center; margin: auto"
        >
          <h1 style="color: #333333; font-size: 24px; display: inline-block">
            Отзыв
          </h1>
        </div>
          <div class="input_info">
            <textarea name = "sod" maxlength="490" type = "text" class="reviewInput" placeholder="Максимальная длина отзыва - 500 символов"><?php if($_SESSION['game']['foundReview']) echo $_SESSION['game']['foundReview']['reviewSod'];?></textarea>
          </div>
          
            
          <?php
            if($_SESSION['game']['foundReview']){
                echo'<div style="display: inline-block; max-width: 90%; margin-left: 20%;" >
                    <button type="submit" name="save" class="btn">Сохранить</button>
                    <button type="submit" name="delete" class="btn" style="background: #DC143C">Удалить</button></div>';
            }
            else echo'<div style="display: inline-block; max-width: 90%; margin-left: 35%;" >
                    <button type="submit" class="btn">Отправить</button></div>
                    ';
            
            ?>
            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
            <div style="margin-left: 70px" class="g-recaptcha" data-sitekey="6LemcUsmAAAAAMOCJzbZmyPo0ySngVl6zAUXy5xj"></div>        
      </form>
      <?php
            if($_SESSION['message']){
                echo '<p style="margin-left: 45.5%">' . $_SESSION['message'] . '</p>';
            }
            unset($_SESSION['message'])
            ?>
    </main>
  </body>
</html>
