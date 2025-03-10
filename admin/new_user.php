<?php 
//User permission check

// Enable error reporting

//include("../managementfiles/php_scripts/is_acc_logged.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Women's Consortium Portal Create new user</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="../assets/img/favicon.png">

    <!-- Select 2 -->
    <link rel="stylesheet" href="../assets/css/select2.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css">

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="../assets/css/toastr.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.min.css">

    <!-- Feather CSS -->
    <link rel="stylesheet" href="../assets/plugins/feather/feather.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>
    <div class="main-wrapper">

        <!-- Sidebar -->
        <?php include("../managementfiles/php_scripts/sidebar.php"); ?>

        <div class="page-wrapper">
            <div class="content">
                <form id="saveUser">
                    <div class="row">
                        <div class="col-lg-7 col-sm-12 m-auto">
                            <div class="content-page-header">
                                <h5>Add new user</h5>
                            </div>
                            <div class="row">
                                <!--<div class="col-lg-12">
                                    <div class="profile-upload">
                                        <div class="profile-upload-img">
                                            <img src="../assets/img/customer/user-01.jpg" alt="img" id="blah">
                                        </div>
                                        <div class="profile-upload-content">
                                            <div class="profile-upload-btn">
                                                <div class="profile-upload-file">
                                                    <input type="file" id="user_img" accept=".jpg, .jpeg, .png">
                                                    <a href="javascript:void(0);" class="btn btn-load-one">Upload</a>
                                                </div>
                                                <a href="javascript:void(0);" class="btn btn-remove">Remove</a>
                                            </div>
                                            <div class="profile-upload-para">
                                                <p>*image size should be at least 320px big,and less then 500kb. Allowed files .png and .jpg.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Enter Name</label>
                                        <input type="text" name="user_fullnames" id="user_fullnames"
                                            class="form-control" placeholder="Add Name ">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>User Name</label>
                                        <input type="text" class="form-control" name="usernames" id="usernames"
                                            placeholder="Enter User Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="user_email" id="user_email"
                                            placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="user_phone" id="user_phone" class="form-control"
                                            placeholder="Enter Phone Number">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <div class="pass-group">
                                            <input type="password" name="user_pass" id="user_pass"
                                                class="form-control pass-input" placeholder="*********">
                                            <span class="fas toggle-password fa-eye-slash"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Repeat Password</label>
                                        <div class="pass-group">
                                            <input type="password" name="user_cpass" id="user_cpass"
                                                class="form-control pass-inputs" placeholder="*********">
                                            <span class="fas toggle-passwords fa-eye-slash"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="select" name="user_role" id="user_role">
                                            <option value="default">Please set user role</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Lawyer">Lawyer</option>
                                            <option value="System User">System User</option>
                                        </select>
                                    </div>


                                </div>

                                <div class="col-6" id="lawyer_options" style="display: none;">
                                    <!-- Additional dropdown for Lawyer -->
                                    <div class="form-group">
                                        <label>Lawyer Specialization</label>
                                        <select class="select" name="lawyer_specialization" id="lawyer_specialization"
                                            onChange="getSubCategory(this.value);">
                                            <option value="default">Select a legal profession</option>
                                            <?php 

                                            $prac_area = getAll('practice_areas');
                                            foreach($prac_area as $area):
                                            echo '<option value="'.$area['id'].'">'.$area['area'].'</option>';

                                            endforeach;

                                             ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <!-- Additional dropdown for Lawyer -->
                                    <div class="form-group" id="subCat">
                                    </div>

                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <ul class="custom-radiosbtn">
                                            <li>
                                                <label class="radiossets">Active
                                                    <input type="radio" checked name="user_state" id="user_state"
                                                        value="Active">
                                                    <span class="checkmark-radio"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="radiossets">Inactive
                                                    <input type="radio" name="user_state" id="user_state"
                                                        value="Inactive">
                                                    <span class="checkmark-radio"></span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="btn-path">
                                        <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                                        <button type="submit" class="btn btn-submit "> Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../assets/js/jquery-3.6.4.min.js"></script>

    <!-- Select 2 JS-->
    <script src="../assets/js/select2.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="../assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>

    <!-- Feather Icon JS -->
    <script src="../assets/js/feather.min.js"></script>

    <!-- Datatable JS -->
    <script src="../assets/js/jquery.dataTables.min.js"></script>
    <script src="../assets/js/dataTables.bootstrap4.min.js"></script>

    <!-- Ck Editor JS -->
    <script src="../assets/js/ckeditor.js"></script>

    <!-- Slimscroll JS -->
    <script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Sweetalert 2 -->
    <script src="../assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script src="../assets/plugins/sweetalert/sweetalerts.min.js"></script>

    <!-- toastr -->
    <script src="../assets/plugins/toastr/toastr.min.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/admin.js"></script>
    <script src="../managementfiles/js_scripts/save_user.js"></script>
    <script>
    $(document).ready(function() {
        $('#user_role').change(function() {
            if ($(this).val() === 'Lawyer') {
                $('#lawyer_options').show(); // Show the additional dropdown
            } else {
                $('#lawyer_options').hide(); // Hide the additional dropdown
            }
        });
    });

    function getSubCategory(val) {
        if (val !== "default") { // Check if a valid option is selected
            $.ajax({
                type: "POST",
                url: "../managementfiles/php_scripts/legalSub_userArea.php",
                data: 'catID=' + val,
                success: function(data) {
                    $("#subCat").html(data).show(); // Show the subCat div
                }
            });
        } else {
            $("#subCat").hide(); // Hide the subCat div if "default" is selected
        }

    }
    </script>

</body>

</html>