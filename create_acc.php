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
                                    <h5>Sign Up</h5>
                                </div>
                                <form id="form_sign_up">
                                    <div class="login-input">
                                        <div class="row">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <select class="select" id="client_title" name="client_title">
                                                    <option value="default">Please set your title</option>
                                                    <option value="Mr.">Mr.</option>
                                                    <option value="Ms.">Ms.</option>
                                                    <option value="Mrs.">Mrs.</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" id="first_name"
                                                    name="first_name" placeholder="John">
                                            </div>
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" id="last_name" name="last_name"
                                                    placeholder="Doe">
                                            </div>
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <select class="select" id="client_sex" name="client_sex">
                                                    <option value="default">Please set your gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" id="userzid" name="userzid"
                                                placeholder="jane_doe">
                                        </div>
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input type="text" class="form-control" id="user_email" name="user_email"
                                                placeholder="john@doe.com">
                                        </div>
                                        <div class="form-group">
                                            <label>Telephone</label>
                                            <input type="text" class="form-control" id="user_tel" name="user_tel"
                                                placeholder="0293******12">
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex justify-content-between">
                                                <label>Password</label>
                                            </div>
                                            <div class="pass-group">
                                                <input type="password" id="user_pass" name="user_pass"
                                                    class="form-control pass-input" placeholder="********">
                                                <span class="fas toggle-password fa-eye-slash"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="login-button">
                                        <button name="submit" class="btn btn-login">Create Account</button>
                                    </div>
                                </form>
                                <div class="signinform text-center">
                                    <h4>Don't have an account? <a href="index.php" class="hover-a">Sign in</a></h4>
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