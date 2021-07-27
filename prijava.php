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
    <title>Registracija</title>
</head>
<body>
    <?php

    session_start();
    if(!isset($_SESSION['success']))
    {
        $_SESSION['success'] = 0;
    }
    if(!isset($_SESSION['error']))
    {
        $_SESSION['error'] = 0;
    }
    if($_SESSION['success'] == 0){
    echo '<div class="card" id="register-card">
        <div class="card-body">
            <h2>Registracija</h2>
            <br>
            <form method="post" action="prijavaVendor.php">';
        echo '
                <label for="_ime">Ime</label>
                <input type="text" name="_ime" placeholder="Unesite ime" class="form-input">
                <br><br>
                <label for="_prezime">Prezime</label>
                <input type="text" name="_prezime" placeholder="Unesite prezime" class="form-input">
                <br><br>
                <label for="_smer">Smer</label>
                <select name="_smer" class="form-input" id="smer-select">
                    <option value="RN">RN</option>
                    <option value="RI">RI</option>
                    <option value="S">S</option>
                </select>
                <br><br>
                <div class="button-holder">';
                    echo '<button type="submit" class="btn btn-primary" name="_submit" id="register-button">Registruj se</button>
                </div>
            </form>
        </div>';
    }
        
        if($_SESSION['error'] == 1){
            echo '<div class="card-footer">
            <div class="alert alert-danger" role="alert">
                Prijavni obrazac nije ispravno popunjen
            </div>
        </div>';
        $_SESSION['error'] = 0;
        }
        
        if($_SESSION['success'] == 1){
            echo '<div class="card" id="register-card"><div class="card-body">
            <div class="alert alert-success" role="alert">
                Prijava je prihvacena!
            </div></div>
        </div>';
        $_SESSION['success'] = 0;
        }
        ?>

    </div>

</body>
</html>