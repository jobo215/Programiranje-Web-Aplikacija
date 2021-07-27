<?php
    
    session_start();
    include('dbcon.php');
    if(isset($_POST['_izasao'])){
        $poeni = $_POST['_poeni'];
        if($poeni < 0 || $poeni > 100){
            $_SESSION['errorUnos'] = true;
            header("Location: unos-bodova.php");
        } else{
            $kandidatID = $_SESSION['kandidatID'];
            $mysql->query("UPDATE `kandidati` SET `izasao`='1',`bodovi`='$poeni' WHERE id = '$kandidatID'");
            header("Location: prijave.php");
        }

    } else{
        $mysql->query("UPDATE `kandidati` SET `izasao`='0',`bodovi`='$poeni' WHERE id = '0'");
        header("Location: prijave.php");
    }

?>