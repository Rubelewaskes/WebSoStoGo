<?php
    
    session_start();
    require_once 'connect.php';
    $login = md5(htmlspecialchars($_POST['login']));
    $query = "SELECT * FROM `users` where `userLogin` = '$login'";
    $user = mysqli_fetch_assoc(mysqli_query($connect, $query));
    if(password_verify(htmlspecialchars($_POST['password']) + 'p6a1t', $user['userPassword'])){
        // 
        $_SESSION['user'] = [
            
            "id" => $user['userId'],
            "name" => $user['userName']
        ];
        header('Location: ../index.php');
    }
    else{
        $_SESSION['message'] = 'Данные неверны или пользователь не существует';
        header('Location: ../Auth.php');
    }

?>