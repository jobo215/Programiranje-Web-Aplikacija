<?php
    session_start();
    $_SESSION['error'] = 0;
    $_SESSION['success'] = 0;
    if(isset($_POST['_ime']) && isset($_POST['_prezime']) && !isset($ime)){
        $ime = $_POST['_ime'];
        $prezime = $_POST['_prezime'];
        $smer = $_POST['_smer'];
        if(strlen($ime) < 3 || strlen($prezime) < 3){
            $_SESSION['error'] = 1;
        } else {
            include('dbcon.php');
            $sql1 = "INSERT INTO `kandidati`(`ime`, `prezime`, `smer`) VALUES ('$ime', '$prezime', '$smer')";
            $mysql->query($sql1);
            $_SESSION['success'] = 1;
        }
    }

    header("Location: prijava.php");

?>