<?php
    
    session_start();
    require_once 'connect.php';
    
    $name = $_POST['Name'];
    $login = $_POST['Login'];
    $password = $_POST['Password'];
    $passwordConfirm = $_POST['PasswordConfirm'];
    
    if($name !== '' and  $login !== '' and $password !== '' and $passwordConfirm !== ''){
        if($password === $passwordConfirm){
            $login = md5($login);
            if( mysqli_num_rows(mysqli_query($connect, "SELECT * FROM `users` where `userLogin` = '$login' OR `userName`='$name'")) === 0){
                $password = md5($password);
        
                mysqli_query($connect, "INSERT INTO `users` (`userId`, `userName`, `userLogin`, `userPassword`) VALUES ('','$name', '$login', '$password')");
                $_SESSION['message'] = 'Регистрация успешна';
                header('Location: ../Auth.php');
            }
            else{
                $_SESSION['message'] = 'Пользователь с таким логином или именем уже существует';
                header('Location: ../Reg.php');
            }
        }
        else{
            $_SESSION['message'] = 'Пароли не совпадают';
            header('Location: ../Reg.php');
        }
    }
    else{
        $_SESSION['message'] = 'Поля не должны быть пустыми';
        header('Location: ../Reg.php');
    }

?>


    