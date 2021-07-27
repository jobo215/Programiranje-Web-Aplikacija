<?php

    session_start();
    if(isset($_POST)){
        $_username = $_POST['_username'];
        $_password = $_POST['_password'];
        include('dbcon.php');
        $sql = "SELECT * FROM users WHERE username = '$_username' AND password = '$_password'";
        $result = $mysql->query($sql);
        if(mysqli_num_rows($result) > 0){
            $_SESSION['logged'] = true;
            header("Location: prijave.php");
        } else{
            $_SESSION['login_error'] = true;
            header("Location: login.php");
        }
    }

?>