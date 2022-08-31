<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <title>Phony</title>
   
</head>
<body>
 <!--Nav-->
 <section id="Navbar">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img class="logo" src="images/logo_1.jpg" alt="" width="80" height="40" class="d-inline-block"/>
                
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php#Home">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="index.php#AboutUs">ABOUT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="index.php#featured_cars">FEATURED PHONES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="index.php#faqs">FAQs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="index.php#contact_us">CONTACT US</a>
              </li>
            </ul>
            <div class="Login">
            <?php
                if(isset($_SESSION['email'])){
                    ?>
              <a href="cart.php"  class="btn btn-primary">Cart</a>
              <a href="logout.php" class="btn btn-primary">Logout</a>
                    <?php
                           }else{
                            ?>
              <a href="login.php" class="btn btn-outline-primary me-2">Login</a>
              <a href="signup.php" class="btn btn-primary">Sign-up</a>
              <?php
                }
                 ?>
              </div>
          </div>
        </div>
      </nav>
      </section>
              </body>
              </html>