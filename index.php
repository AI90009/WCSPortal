<?php

  require_once('managementfiles/php_scripts/functions.php');

  if(isset($_SESSION['user_login_state'])){
    echo '<script>window.location.href = "managementfiles/php_scripts/permissions.php"</script>';
  }

?>
<!-- Ayan Ismail -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Women's Consortium Portal Sign In</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="assets/css/feather.css">

    <!-- Select 2 -->
    <link rel="stylesheet" href="assets/css/select2.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="assets/css/toastr.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div class="main-wrapper wrapper-login">
        <div class="login-pages">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12">
                        <div class="login-logo">
                            <img src="assets/img/logo-login.png" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 mx-auto">
                        <div class="login-wrap">
                            <div class="login-content">
                                <div class="login-contenthead text-center">
                                    <h5>Login</h5>
                                </div>
                                <form id="formAuthentication">
                                    <div class="login-input">
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input type="text" class="form-control" id="username" name="username"
                                                placeholder="example@email.com">
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex justify-content-between">
                                                <label>Password</label>
                                            </div>
                                            <div class="pass-group">
                                                <input type="password" id="password" name="password"
                                                    class="form-control pass-input" placeholder="********">
                                                <span class="fas toggle-password fa-eye-slash"></span>
                                            </div>
                                        </div>
                                        <div class="filter-checkbox m-0">
                                            <ul class="d-flex justify-content-between">
                                                <li>
                                                    <label class="checkboxs">
                                                        <input type="checkbox">
                                                        <span><i></i></span>
                                                        <b class="check-content">Remember Me</b>
                                                    </label>
                                                </li>
                                                <li>
                                                    <a class="forgot-link" href="">Forgot
                                                        password?</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="login-button">
                                        <button name="submit" class="btn btn-login">Sign-in</button>
                                    </div>
                                </form>
                                <div class="signinform text-center">
                                    <h4>Don't have an account? <a href="create_acc.php" class="hover-a">Sign Up</a></h4>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="assets/js/jquery-3.6.4.min.js"></script>

    <!-- Select 2 JS-->
    <script src="assets/js/select2.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Sweetalert 2 -->
    <script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

    <!-- toastr -->
    <script src="assets/plugins/toastr/toastr.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/admin.js"></script>
    <script src="managementfiles/js_scripts/auth_user.js"></script>

</body>

</html>