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

    <!-- Ck Editor -->
	<link rel="stylesheet" href="../assets/css/ckeditor.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>
    <div class="main-wrapper">
    
        <!-- Sidebar -->
        <?php include("../managementfiles/php_scripts/sidebar.php"); ?> 

        <div class="page-wrapper">
            <div class="content">
                <form id="saveSub_area">
                    <div class="row">
                        <div class="col-lg-7 col-sm-12 m-auto">
                            <div class="content-page-header">
                                <h5>New Sub-Practice Area</h5>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Select a practice area</label>
                                        <select class="select" name="practice_area" id="practice_area">
                                        <option selected value="default">Select a practice area</option>
                                        <?php 
                                            $getPrac = getAll("practice_areas"); 
                                            if($getPrac){
                                                foreach($getPrac as $pract):
                                                    echo '<option value="'.$pract['id'].'">'.$pract['area'].'</option>';
                                                endforeach;
                                            }else{
                                                echo '<option disabled>Empty</option>';
                                            }
                                        
                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Enter a sub-practice name</label>
                                        <input type="text" name="subPractice" id="subPractice" class="form-control" placeholder="Enter a sub-practice area">
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
    <script src="../managementfiles/js_scripts/newSub_area.js"></script>

</body> 

</html>