<?php

    $connect = mysqli_connect('localhost', 'h96220yi_users', 'UsersTable123', 'h96220yi_users');
    
    if (!$connect){
        die('Error connect to DataBase');
    }
?>