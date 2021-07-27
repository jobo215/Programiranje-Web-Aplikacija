<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" defer></script>
    <title>Rezultati</title>
</head>
<body>

    <!-- TABELA 1-->    

    <h2>RN</h2>
    <br>
    <table class="table table-sm">
        <thead>
            <tr>
                <th>Ime i prezime</th>
                <th>Broj bodova</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            <?php 
                include("dbcon.php");
                $sql1 = "SELECT `ime`, `prezime`, `bodovi` FROM `kandidati` WHERE `smer` = 'RN' ORDER BY `bodovi` DESC";
                $res = $mysql->query($sql1);
                $results = $res->fetch_all(MYSQLI_ASSOC);
                foreach($results as $result){
                    echo '<tr><td>' . $result['ime'] . ' ' . $result['prezime'] . '</td>';
                    echo '<td>' . $result['bodovi'] . '</td>';
                    $text = 'Pao';
                    if($result['bodovi'] > 60){
                        $text = 'Polozio';
                    }
                    echo '<td>' . $text . ' </td></tr>';
                }
            ?>
        </tbody>
    </table>

     <!-- TABELA 2-->    

    <h2>RI</h2>
    <br>
    <table class="table table-sm">
        <thead>
            <tr>
                <th>Ime i prezime</th>
                <th>Broj bodova</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            <?php 
                include("dbcon.php");
                $sql1 = "SELECT `ime`, `prezime`, `bodovi` FROM `kandidati` WHERE `smer` = 'RI' ORDER BY `bodovi` DESC";
                $res = $mysql->query($sql1);
                $results = $res->fetch_all(MYSQLI_ASSOC);
                foreach($results as $result){
                    echo '<tr><td>' . $result['ime'] . ' ' . $result['prezime'] . '</td>';
                    echo '<td>' . $result['bodovi'] . '</td>';
                    $text = 'Pao';
                    if($result['bodovi'] > 60){
                        $text = 'Polozio';
                    }
                    echo '<td>' . $text . ' </td></tr>';
                }
            ?>
        </tbody>
    </table>


    <!-- TABELA 2-->    

    <h2>S</h2>
    <br>
    <table class="table table-sm">
        <thead>
            <tr>
                <th>Ime i prezime</th>
                <th>Broj bodova</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            <?php 
                include("dbcon.php");
                $sql1 = "SELECT `ime`, `prezime`, `bodovi` FROM `kandidati` WHERE `smer` = 'S' ORDER BY `bodovi` DESC";
                $res = $mysql->query($sql1);
                $results = $res->fetch_all(MYSQLI_ASSOC);
                foreach($results as $result){
                    echo '<tr><td>' . $result['ime'] . ' ' . $result['prezime'] . '</td>';
                    echo '<td>' . $result['bodovi'] . '</td>';
                    $text = 'Pao';
                    if($result['bodovi'] > 60){
                        $text = 'Polozio';
                    }
                    echo '<td>' . $text . ' </td></tr>';
                }
            ?>
        </tbody>
    </table>

</body>
</html>