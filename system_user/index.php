<?php 


//include("../managementfiles/php_scripts/is_acc_logged.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Women's Consortium Portal Dashboard</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="../assets/img/favicon.png">
    
    <!-- Select 2 -->
    <link rel="stylesheet" href="../assets/css/select2.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css">

    <!-- Map CSS -->
    <link rel="stylesheet" href="../assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.min.css">

    <!-- Feather CSS -->
    <link rel="stylesheet" href="../assets/plugins/feather/feather.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>
    <div class="main-wrapper">
    
       <!-- sideBar -->
        <?php include("../managementfiles/php_scripts/sidebar.php"); ?>
        
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12 d-flex widget-path widget-service" >
                        <div class="card">
                            <div class="card-body">
                                <div class="home-user">
                                    <div class="home-userhead">
                                        <div class="home-usercount">
                                            <span><img src="../assets/img/icons/user.svg" alt="img"></span>
                                            <h6>User</h6>
                                        </div>
                                        <div class="home-useraction">
                                            <a class="delete-table bg-white" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu" data-popper-placement="bottom-end">
                                                <li>
                                                    <a href="user-list.html" class="dropdown-item"> View</a>
                                                </li>
                                                <li>
                                                    <a href="edit-user.html" class="dropdown-item"> Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="home-usercontent">
                                        <div class="home-usercontents">
                                            <div class="home-usercontentcount">
                                                <img src="../assets/img/icons/arrow-up.svg" alt="img" class="me-2">
                                                <span class="counters"  data-count="30">30</span>
                                            </div>
                                            <h5> Current Month</h5>
                                        </div>
                                        <div class="homegraph">
                                            <img src="../assets/img/graph/graph1.png" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex widget-path widget-service">
                        <div class="card">
                            <div class="card-body">
                                <div class="home-user home-provider">
                                    <div class="home-userhead">
                                        <div class="home-usercount">
                                            <span><img src="../assets/img/icons/user-circle.svg" alt="img"></span>
                                            <h6>Providers</h6>
                                        </div>
                                        <div class="home-useraction">
                                            <a class="delete-table bg-white" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu" data-popper-placement="bottom-end">
                                                <li>
                                                    <a href="user-providers.html" class="dropdown-item"> View</a>
                                                </li>
                                                <li>
                                                    <a href="edit-provider.html" class="dropdown-item"> Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="home-usercontent">
                                        <div class="home-usercontents">
                                            <div class="home-usercontentcount">
                                                <img src="../assets/img/icons/arrow-up.svg" alt="img" class="me-2">
                                                <span class="counters"  data-count="25">25</span>
                                            </div>
                                            <h5> Current Month</h5>
                                        </div>
                                        <div class="homegraph">
                                            <img src="../assets/img/graph/graph2.png" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex widget-path widget-service">
                        <div class="card">
                            <div class="card-body">
                                <div class="home-user home-service">
                                    <div class="home-userhead">
                                        <div class="home-usercount">
                                            <span><img src="../assets/img/icons/service.svg" alt="img"></span>
                                            <h6>Service</h6>
                                        </div>
                                        <div class="home-useraction">
                                            <a class="delete-table bg-white" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu" data-popper-placement="bottom-end">
                                                <li>
                                                    <a href="listings.html" class="dropdown-item"> View</a>
                                                </li>
                                                <li>
                                                    <a href="edit-service.html" class="dropdown-item"> Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="home-usercontent">
                                        <div class="home-usercontents">
                                            <div class="home-usercontentcount">
                                                <img src="../assets/img/icons/arrow-up.svg" alt="img" class="me-2">
                                                <span class="counters"  data-count="18">18</span>
                                            </div>
                                            <h5> Current Month</h5>
                                        </div>
                                        <div class="homegraph">
                                            <img src="../assets/img/graph/graph3.png" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex widget-path widget-service">
                        <div class="card">
                            <div class="card-body">
                                <div class="home-user home-subscription">
                                    <div class="home-userhead">
                                        <div class="home-usercount">
                                            <span><img src="../assets/img/icons/money.svg" alt="img"></span>
                                            <h6>Subscription</h6>
                                        </div>
                                        <div class="home-useraction">
                                            <a class="delete-table bg-white" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu"  data-popper-placement="bottom-end">
                                                <li>
                                                    <a href="membership.html" class="dropdown-item"> View</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"> Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="home-usercontent">
                                        <div class="home-usercontents">
                                            <div class="home-usercontentcount">
                                                <img src="../assets/img/icons/arrow-up.svg" alt="img" class="me-2">
                                                <span class="counters"  data-count="650">$650</span>
                                            </div>
                                            <h5> Current Month</h5>
                                        </div>
                                        <div class="homegraph">
                                            <img src="../assets/img/graph/graph4.png" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-12 d-flex  widget-path">
                        <div class="card">
                            <div class="card-body">
                                <div class="home-user">
                            <div class="home-head-user">
                                <h2>Revenue</h2>
                                <div class="home-select">
                                    <div class="dropdown">
                                        <button class="btn btn-action btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Monthly
                                        </button>
                                        <ul class="dropdown-menu" data-popper-placement="bottom-end" >
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">Weekly</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">Monthly</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">Yearly</a>
                                            </li>												
                                        </ul>
                                    </div>
                                    <div class="dropdown">
                                        <a class="delete-table bg-white" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-menu" data-popper-placement="bottom-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"> View</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"> Edit</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="chartgraph">
                                <div id="chart-view"></div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 d-flex  widget-path">
                        <div class="card">
                            <div class="card-body">
                                <div class="home-user">
                                    <div class="home-head-user">
                                        <h2>Booking Summary</h2>
                                        <div class="home-select">
                                            <div class="dropdown">
                                                <button class="btn btn-action btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Monthly
                                                </button>
                                                <ul class="dropdown-menu" data-popper-placement="bottom-end" >
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item">Weekly</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item">Monthly</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item">Yearly</a>
                                                    </li>												
                                                </ul>
                                            </div>
                                            <div class="dropdown">
                                                <a class="delete-table bg-white" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu" data-popper-placement="bottom-end">
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item"> View</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item"> Edit</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chartgraph">
                                        <div id="chart-booking"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 d-flex  widget-path">
                        <div class="card">
                            <div class="card-body">
                                <div class="home-user">
                                    <div class="home-head-user">
                                        <h2>Income</h2>
                                        <div class="home-select">
                                            <div class="dropdown">
                                                <button class="btn btn-action btn-sm dropdown-toggle" type="button"  data-bs-toggle="dropdown" aria-expanded="false">
                                                    Monthly
                                                </button>
                                                <ul class="dropdown-menu" data-popper-placement="bottom-end" >
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item">Weekly</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item">Monthly</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item">Yearly</a>
                                                    </li>												
                                                </ul>
                                            </div>
                                            <div class="dropdown">
                                                <a class="delete-table bg-white" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu" data-popper-placement="bottom-end">
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item"> View</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item"> Edit</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chartgraph">
                                        <div id="chart-incomes"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12 d-flex widget-path">
                        <div class="card">
                            <div class="card-body">
                                <div class="home-user">
                                    <div class="home-head-user home-graph-header">
                                        <h2>Top Services</h2>
                                        <a href="listings.html" class="btn btn-viewall">View All<i class="fa-solid fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="table-responsive datatable-nofooter">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Service</th>
                                                <th>Category</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <a href="view-service.html" class="table-imgname">
                                                        <img src="../assets/img/services/service-03.jpg" class="me-2" alt="img">
                                                        <span>Computer Repair</span>
                                                    </a>
                                                </td>
                                                <td>Computer</td>
                                                <td>$80</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <a href="view-service.html" class="table-imgname">
                                                        <img src="../assets/img/services/service-02.jpg" class="me-2" alt="img">
                                                        <span>Car Repair Services</span>
                                                    </a>
                                                </td>
                                                <td>Automobile</td>
                                                <td>$50</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <a href="view-service.html" class="table-imgname">
                                                        <img src="../assets/img/services/service-04.png" class="me-2" alt="img">
                                                        <span>Car Wash</span>
                                                    </a>
                                                </td>
                                                <td>Automobile</td>
                                                <td>$14</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    <a href="view-service.html" class="table-imgname">
                                                        <img src="../assets/img/services/service-09.jpg" class="me-2" alt="img">
                                                        <span>House Cleaning </span>
                                                    </a>
                                                </td>
                                                <td>Cleaning</td>
                                                <td>$100</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>
                                                    <a href="view-service.html" class="table-imgname">
                                                        <img src="../assets/img/services/service-10.jpg" class="me-2" alt="img">
                                                        <span>Interior </span>
                                                    </a>
                                                </td>
                                                <td>Cleaning</td>
                                                <td>$50</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 d-flex widget-path">
                        <div class="card">
                            <div class="card-body">
                                <div class="home-user">
                                    <div class="home-head-user home-graph-header">
                                        <h2>Top Providers</h2>
                                        <a href="user-providers.html" class="btn btn-viewall">View All<i class="fa-solid fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="table-responsive datatable-nofooter">
                                        <table class="table datatable ">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Provider Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="table-profileimage">
                                                            <img src="../assets/img/customer/user-06.jpg" class="me-2" alt="img">
                                                            <span>Robert</span>
                                                        </a>
                                                    </td>
                                                    <td>robert@gmail.com</td>
                                                    <td>+1 347-679-8275</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="table-profileimage">
                                                            <img src="../assets/img/customer/user-09.jpg" class="me-2" alt="img">
                                                            <span>Sharonda</span>
                                                        </a>
                                                    </td>
                                                    <td>sharonda@gmail.com</td>
                                                    <td>+1 570-621-248</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="table-profileimage">
                                                            <img src="../assets/img/customer/user-01.jpg" class="me-2" alt="img">
                                                            <span>John Smith</span>
                                                        </a>
                                                    </td>
                                                    <td>johnsmith@gmail.com</td>
                                                    <td>+1 646-957-0004</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="table-profileimage">
                                                            <img src="../assets/img/customer/user-05.jpg" class="me-2" alt="img">
                                                            <span>Pricilla</span>
                                                        </a>
                                                    </td>
                                                    <td>pricilla@gmail.com</td>
                                                    <td>+1 614-915-8101</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="table-profileimage">
                                                            <img src="../assets/img/customer/user-09.jpg" class="me-2" alt="img">
                                                            <span>James</span>
                                                        </a>
                                                    </td>
                                                    <td>james@gmail.com</td>
                                                    <td>+1 918-543-3702</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-sm-12 d-flex widget-path">
                        <div class="card">
                            <div class="card-body">
                                <div class="home-user">
                                    <div class="home-head-user home-graph-header">
                                        <h2>Top Countries</h2>
                                        <div class="home-select">
                                            <div class="dropdown">
                                                <button class="btn btn-action btn-sm dropdown-toggle" type="button"  data-bs-toggle="dropdown" aria-expanded="false">
                                                    Monthly
                                                </button>
                                                <ul class="dropdown-menu" data-popper-placement="bottom-end" >
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item">Weekly</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item">Monthly</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item">Yearly</a>
                                                    </li>												
                                                </ul>
                                            </div>
                                            <div class="dropdown">
                                                <a class="delete-table bg-white" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu" data-popper-placement="bottom-end">
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item"> View</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item"> Edit</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chartgraph">
                                        <div class="row align-items-center">
                                            <div class="col-lg-7">
                                                <div id="world_map" style="height: 150px"></div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="bookingmap">
                                                    <ul>
                                                        <li>
                                                            <span><img src="../assets/img/flags/us.png" alt="img" class="me-2">United State</span>
                                                            <h6>60%</h6>
                                                        </li>
                                                        <li>
                                                            <span><img src="../assets/img/flags/in.png" alt="img" class="me-2">India</span>
                                                            <h6>80%</h6>
                                                        </li>
                                                        <li>
                                                            <span><img src="../assets/img/flags/ca.png" alt="img" class="me-2">Canada</span>
                                                            <h6>50%</h6>
                                                        </li>
                                                        <li>
                                                            <span><img src="../assets/img/flags/au.png" alt="img" class="me-2">Australia</span>
                                                            <h6>75%</h6>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 d-flex widget-path">
                        <div class="card">
                            <div class="card-body">
                                <div class="home-user">
                                    <div class="home-head-user home-graph-header">
                                        <h2>Booking Statistics</h2>
                                        <a href="booking.html" class="btn btn-viewall">View All<i class="fa-solid fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="chartgraph">
                                        <div class="row align-items-center">
                                            <div class="col-lg-7 col-sm-6">
                                                <div id="chart-bar"></div>
                                            </div>
                                            <div class="col-lg-5 col-sm-6">
                                                <div class="bookingstatus">
                                                    <ul>
                                                        <li>
                                                            <span></span>
                                                            <h6>Completed</h6>
                                                        </li>
                                                        <li class="process-status">
                                                            <span></span>
                                                            <h6>Process</h6>
                                                        </li>
                                                        <li class="process-pending">
                                                            <span></span>
                                                            <h6>Pending</h6>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 widget-path">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="home-user">
                                    <div class="home-head-user home-graph-header">
                                        <h2>Recent Booking</h2>
                                        <a href="booking.html" class="btn btn-viewall">View All<i class="fa-solid fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="table-responsive datatable-nofooter">
                                        <table class="table datatable">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                    <th>Booking Time</th>
                                                    <th>Provider</th>
                                                    <th>User</th>
                                                    <th>Service</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>28 Sep 2022</td>
                                                    <td>10:00:00 - 11:00:00</td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="table-profileimage">
                                                            <img src="../assets/img/customer/user-01.jpg" class="me-2" alt="img">
                                                            <span>John Smith</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="table-profileimage">
                                                            <img src="../assets/img/customer/user-03.jpg" class="me-2" alt="img">
                                                            <span>Sharon</span>
                                                        
                                                    </a></td>
                                                    <td>
                                                        <a href="view-service.html" class="table-imgname">
                                                            <img src="../assets/img/services/service-03.jpg" class="me-2" alt="img">
                                                            <span>Computer Repair</span>
                                                        </a>
                                                    </td>
                                                    <td>$80</td>
                                                    <td><h6 class="badge-pending">Pending</h6></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>10 Sep 2022</td>
                                                    <td>18:00:00 - 19:00:00	 </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="table-profileimage">
                                                            <img src="../assets/img/customer/user-04.jpg" class="me-2" alt="img">
                                                            <span>Johnny</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="table-profileimage">
                                                            <img src="../assets/img/customer/user-05.jpg" class="me-2" alt="img">
                                                            <span>Pricilla</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="view-service.html" class="table-imgname">
                                                            <img src="../assets/img/services/service-02.jpg" class="me-2" alt="img">
                                                            <span>Car Repair Services</span>
                                                        </a>
                                                    </td>
                                                    <td>$50</td>
                                                    <td><h6 class="badge-active">Completed</h6></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>25 Sep 2022</td>
                                                    <td>12:00:00 - 13:00:00</td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="table-profileimage">
                                                            <img src="../assets/img/customer/user-06.jpg" class="me-2" alt="img">
                                                            <span>Robert</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="table-profileimage">
                                                            <img src="../assets/img/customer/user-02.jpg" class="me-2" alt="img">
                                                            <span>Amanda</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="view-service.html" class="table-imgname">
                                                            <img src="../assets/img/services/service-04.png" class="me-2" alt="img">
                                                            <span>Steam Car Wash</span>
                                                        </a>
                                                    </td>
                                                    <td>$50</td>
                                                    <td><h6 class="badge-inactive">Inprogress</h6></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>08 Sep 2022</td>
                                                    <td>07 Oct 2022 11:22:51</td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="table-profileimage">
                                                            <img src="../assets/img/customer/user-09.jpg" class="me-2" alt="img">
                                                            <span>Sharonda</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="table-profileimage">
                                                            <img src="../assets/img/customer/user-01.jpg" class="me-2" alt="img">
                                                            <span>James</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="view-service.html" class="table-imgname">
                                                            <img src="../assets/img/services/service-09.jpg" class="me-2" alt="img">
                                                            <span>House Cleaning </span>
                                                        </a>
                                                    </td>
                                                    <td>$50</td>
                                                    <td><h6 class="badge-delete">cancelled</h6></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>28 Sep 2022</td>
                                                    <td>10:00:00 - 11:00:00</td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="table-profileimage">
                                                            <img src="../assets/img/customer/user-01.jpg" class="me-2" alt="img">
                                                            <span>John Smith</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="table-profileimage">
                                                            <img src="../assets/img/customer/user-03.jpg" class="me-2" alt="img">
                                                            <span>Sharon</span>
                                                        
                                                    </a></td>
                                                    <td>
                                                        <a href="view-service.html" class="table-imgname">
                                                            <img src="../assets/img/services/service-03.jpg" class="me-2" alt="img">
                                                            <span>Computer Repair</span>
                                                        </a>
                                                    </td>
                                                    <td>$80</td>
                                                    <td><h6 class="badge-pending">Pending</h6></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <!-- jQuery -->
    <script src="../assets/js/jquery-3.6.4.min.js"></script>
    
    <!-- Select 2 JS-->
    <script src="../assets/js/select2.min.js"></script>

    <!-- Chart JS -->
    <script src="../assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="../assets/plugins/apexchart/chart-data.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

     <!-- Feather Icon JS -->
     <script src="../assets/js/feather.min.js"></script>

    <!-- Datatable JS -->
    <script src="../assets/js/jquery.dataTables.min.js"></script>
    <script src="../assets/js/dataTables.bootstrap4.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Map JS -->
    <script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
    <script src="../assets/plugins/jvectormap/jquery-jvectormap-ru-mill.js"></script>
    <script src="../assets/plugins/jvectormap/jquery-jvectormap-us-aea.js"></script>
    <script src="../assets/plugins/jvectormap/jquery-jvectormap-uk_countries-mill.js"></script>        
    <script src="../assets/plugins/jvectormap/jquery-jvectormap-in-mill.js"></script>
    <script src="../assets/js/jvectormap.js"></script>
   

 <!-- Sweetalert 2 -->
    <script src="../assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script src="../assets/plugins/sweetalert/sweetalerts.min.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/admin.js"></script>

</body>

</html>