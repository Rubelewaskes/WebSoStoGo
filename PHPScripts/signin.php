<?php
    
    session_start();
    require_once 'connect.php';
        
    $login = md5($_POST['login']);
    $password = md5($_POST['password']);
    $checkUser = mysqli_query($connect, "SELECT * FROM `users` where `userLogin` = '$login' AND `userPassword`='$password'");
    if(mysqli_num_rows($checkUser) === 1){
        $user = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `users` where `userLogin` = '$login' AND `userPassword`='$password'"));
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