<?php 
//User permission check
//include("../managementfiles/php_scripts/is_acc_logged.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Women's Consortium Portal User management</title>

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

        <div class="page-wrapper page-settings">
            <div class="content">
                <div class="content-page-header content-page-headersplit">
                    <h5>All Registered Lawyers</h5>
                </div>
                <div class="row">
                    <div class="col-12 ">
                        <div class="table-resposnive">
                            <table class="table userDatatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Practice Areas & Sub-Areas</th>
                                        <th>Mobile</th>
                                        <th>Created by</th>
                                        <th>Created on</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <!-- Delete -->
    <div class="modal fade" id="delete-item" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered ">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Delete users</h5>
					<button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
						<i class="fe fe-x"></i>
					</button>
				</div>
                <form action="user-list.html">
                    <div class="modal-body py-0">
                        <div class="del-modal">
                            <p>Are you sure want to Delete?</p>
                        </div>
                    </div>
                    <div class="modal-footer pt-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                </form>
			</div>
		</div>
	</div>
    <!-- /Delete -->

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

    <!-- Slimscroll JS -->
    <script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

 <!-- Sweetalert 2 -->
    <script src="../assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script src="../assets/plugins/sweetalert/sweetalerts.min.js"></script>

    
    <!-- toastr -->
    <script src="../assets/plugins/toastr/toastr.min.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/admin.js"></script> 
    <script src="../managementfiles/js_scripts/manage_lawyer.js"></script>

</body>

</html>
