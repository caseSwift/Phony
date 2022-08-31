<?php
    require 'connection.php';
    session_start();
    if(isset($_SESSION['email'])){
        header('location: products.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet">
    <title>Sign up</title>
</head>
<body>
  <div>
            <?php
                require 'navbar.php';
            ?>
            <br>
            <br>
            <br>
    <section class="vh-100" style="background-color:  #cad398;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <h3 class="mb-5">CREATE AN ACCOUNT</h3>
                  <form method="post" action="user_registration_script.php">
                  <div class="form-group form-outline mb-4">
                    <label class="form-label " for="typeEmailX-2">Name</label>
                    <input type="text" class="form-control form-control-lg" name="name" placeholder="Name" required="true">
                    <!--
                    <input type="text" placeholder="Username" id="typeUsernameX-2" class="form-control form-control-lg" />
                    -->
                  </div>
      
                  <div class="form-group form-outline mb-4">
                    <label class="form-label " for="typeEmailX-2">Email</label>
                    <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    <!--
                    <input type="email" placeholder="Email" id="typeEmailX-2" class="form-control form-control-lg" />
                    -->
                  </div>
                  
                  <div class="form-group form-outline mb-4">
                   
                    <label class="form-label" for="typePasswordX-2">Password</label>
                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">

                    <!--
                    <input type="password" placeholder="Password" id="typePasswordX-2" class="form-control form-control-lg" />
                    -->
                  </div>

                  <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Sign Up">
                            </div>
                  <!--
                  <button class="btn btn-primary btn-lg btn-block" type="submit">Sign up</button>
                  -->
                  <hr class="my-4">
                  <p>Already have an account? <a target="_self" href="login.php" >Sign in</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  </div>
</body>
</html>