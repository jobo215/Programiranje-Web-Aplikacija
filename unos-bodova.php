<?php
        session_start();
        if(isset($_GET['ime'])){
            $novo = $_GET['ime'];
            $_SESSION['imePrezime'] = $novo;
        }
        $imePrezime = $_SESSION['imePrezime'];
        $razdvojeno = explode(" ", $imePrezime);
        $ime = $razdvojeno[0];
        $prezime = $razdvojeno[1];
        include('dbcon.php');
        $sql1 = "SELECT id, smer FROM kandidati WHERE ime = '$ime' AND prezime = '$prezime'";
        $result = $mysql->query($sql1);
        if(mysqli_num_rows($result) > 0){
            $data = $result->fetch_assoc();
            $smer = $data['smer'];
            $kandidatID = $data['id'];
            $_SESSION['kandidatID'] = $kandidatID;
        } 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"
        defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"
        defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"
        defer></script>
    <title>Unos bodova</title>
</head>

<body class="form-bg">

    <div class="card" id="bodovi-card">
        <div class="card-header">
            <?php echo '<h2>Ime i prezime: ' . $imePrezime . '</h2><br><h2>Smer: ' . $smer . '</h2>'; ?>
        </div>
        <div class="card-body">
            <form method="post" action="unosVendor.php">
                <label for="_poeni">Poeni</label>
                <input type="number" name="_poeni" placeholder="Unesite poene" id="input-poeni">
                <br><br>
                <label for="_izasao">Izasao</label>
                <input type="checkbox" name="_izasao" id="input-check">
                <br><br>
                <div class="button-holder">
                    <button type="submit" class="btn btn-primary" id="login-button">Unesi</button>
                </div>
            </form>
        </div>

        <?php
        if(isset($_SESSION['errorUnos']) && $_SESSION['errorUnos'])
        {
        echo '<div class="card-footer">
            <div class="alert alert-danger" role="alert">
                Broj bodova nije dobar
            </div>
        </div>';
        }
        ?>
    </div>

</body>

</html>