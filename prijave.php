<?php

    session_start();
    if(!isset($_SESSION['logged'])){
            header("HTTP/1.1 401 Unauthorized");
            exit;
    } else{
        include('dbcon.php');
        $sql = "SELECT ime, prezime FROM kandidati";
        $data = $mysql->query($sql);
        $results = $data->fetch_all(MYSQLI_ASSOC);
        $counter = 1;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Prijave</title>
</head>

<body>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Ime i prezime</th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach($results as $result){
                $imePrezime = $result['ime'] . ' ' . $result['prezime'];
                echo '<tr><td><p>' . $counter . ' </p></td>';
                $counter++;
                echo  '<td><a href="unos-bodova.php?ime=' . $imePrezime . '">'. $imePrezime .'</a></td></tr>';
            }
            ?>
        </tbody>

</body>

</html>