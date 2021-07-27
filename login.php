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
    <title>Login</title>
</head>
<body class="form-bg">
    
    <div class="card" id="login-card">
        <div class="card-body">
            <form method="post" action="loginVendor.php">
                <label for="_username">Username</label>
                <input type="text" name="_username" placeholder="Unesite username" class="form-input">
                <br><br>
                <label for="_password">Password</label>
                <input type="password" name="_password" placeholder="Unesite password" class="form-input">
                <br><br>
                <div class="button-holder">
                    <button type="submit" class="btn btn-primary" id="login-button">Login</button>
                </div>
            </form>
        </div>

    <?php
        session_start();
        if(isset($_SESSION['login_error']) && $_SESSION['login_error']){
        echo '<div class="card-footer">
            <div class="alert alert-danger" role="alert">
                Login failed
            </div>
        </div>';
        $_SESSION['login_error'] = false;
        }
    ?>
    </div>

</body>
</html>