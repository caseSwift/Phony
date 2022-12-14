<?php
    
require 'connection.php';
session_start();

require 'navbar.php';
?>

<section class="vh-100" style="background-color: #cad398;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <h3 class="mb-5">Sign in</h3>
                        <form method="post" action="login_submit.php">
                            <div class="form-group form-outline mb-4">
                                <label class="form-label " for="typeEmailX-2">Email</label>
                                <input type="email" class="form-control form-control-lg" name="email"
                                       placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">

                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="typePasswordX-2">Password</label>
                                <input type="password" class="form-control form-control-lg" name="password"
                                       placeholder="Password(min. 6 characters)" pattern=".{6,}">

                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-start mb-4">
                                <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="form1Example3"
                                />
                                <label class="form-check-label" for="form1Example3"> Remember password </label>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Login" class="btn btn-primary btn-lg btn-block">
                            </div>


                            <hr class="my-4">

                            <p>Do not have an account yet? <a target="_self" href="signup.php">Sign up</a></p>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</body>
</html>