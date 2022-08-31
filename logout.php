<?php
    session_start();
    session_unset();
    session_destroy();
?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link href="/css/style.css" rel="stylesheet">
    <title>Logged Out!</title>
    </head>
    <body>
        <div>
            <?php
                require 'navbar.php';
            ?>
            <br>
            <br>
            <br>
            <br>
            <div class="card text-center">
  <h5 class="card-header">Logged Out!</h5>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">You have been Logged out, please Login again.</p>
    <a href="login.php" class="btn btn-primary">Login</a>
  </div>
</div>
        </div>
    </body>
</html>
