 <?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once("functions.php"); 
$loggedEmployee = validate($_SESSION['logged_user_id']['userid']);
$getDetails = getById('wc_users',$loggedEmployee);


if(!isset($_SESSION['user_login_state'])){
    echo '<script>window.location.href = "./../index.php"</script>';
}

$active=''; 
$pageName = basename($_SERVER['PHP_SELF']); 

$index = 'index.php';
$chat = 'chat.php';
$manageusers = 'manage_users.php';
$newusers = 'new_user.php';
$clinicsystem = 'clinic_system.php';
$contactsystem = 'contact_system.php';
$futuresystem = 'future_system.php';
$legalsystem = 'legal_system.php';

?>
 <!-- Header -->
 <div class="header">
            <div class="header-left"> 
                <a href="index.php" class="logo">
                    <img src="../assets/img/logo.svg" alt="Logo" width="30" height="30">
                </a>
                <a href="index.php" class=" logo-small">
                    <img src="../assets/img/logo-small.svg" alt="Logo" width="30" height="30">
                </a>
            </div>
            <a class="mobile_btn" id="mobile_btn" href="javascript:void(0);">
                <i class="fas fa-align-left"></i>
            </a>
            <div class="header-split">
                <div class="page-headers">
                    <div class="search-bar">
						<span><i class="fe fe-search"></i></span>
						<input type="text" placeholder="Search" class="form-control">
					</div>
                </div>
                <ul class="nav user-menu">
                    <!-- Notifications -->
                    <li class="nav-item dropdown has-arrow dropdown-heads ">
                        <a href="javascript:void(0);" data-bs-toggle="dropdown">
                            <i class="fe fe-bell"></i>
                        </a>
                        <div class="dropdown-menu notifications">
                            <div class="topnav-dropdown-header">
                                <span class="notification-title">Notifications</span>
                                <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <a href="notifications.html">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm flex-shrink-0">
                                                    <img class="avatar-img rounded-circle" alt="" src="../assets/img/provider/provider-01.jpg">
                                                </span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Matthew Garcia have been subscribed</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">15 Sep 2020 10:20 PM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <button type="submit" class="btn btn-accept">Accept</button><button type="submit" class="btn btn-decline">Decline</button>
                                    </li>
                                    <li class="notification-message">
                                        <a href="notifications.html">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm flex-shrink-0">
                                                    <img class="avatar-img rounded-circle" alt="" src="../assets/img/provider/provider-02.jpg">
                                                </span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details">
                                                        <span class="noti-title">New User Registered “James Hardin”</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">15 Sep 2020 10:20 PM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <button type="submit" class="btn btn-accept">Accept</button><span><button type="submit" class="btn btn-decline">Decline</button></span>
                                    </li>
                                    <li class="notification-message">
                                        <a href="notifications.html">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm flex-shrink-0">
                                                    <img class="avatar-img rounded-circle" alt="" src="../assets/img/provider/provider-03.jpg">
                                                </span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details">
                                                        <span class="noti-title">New Service added  “Plumbing”</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">15 Sep 2020 10:20 PM</span>
                                                    </p>
                                                   
                                                </div>
                                            </div>
                                        </a>
                                        <button type="submit" class="btn btn-decline-accept">Accept</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="topnav-dropdown-footer">
                                <a href="notifications.html">View all Notifications</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item  has-arrow dropdown-heads ">
                        <a href="javascript:void(0);" class="win-maximize">
                            <i class="fe fe-maximize" ></i>
                        </a>
                    </li>
                    
                    <!-- User Menu -->
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="user-link  nav-link" data-bs-toggle="dropdown">
                            <span class="user-img">
                                <img class="rounded-circle" src="../assets/img/user1.png" width="40" alt="Admin">
                                <span class="animate-circle"></span>
                            </span>
                            <span class="user-content">
                            <span class="user-details">Welcome,</span>
                                <span class="user-name"><?php echo $getDetails['data']['fullnames']; ?></span>
                            </span>
                        </a>
                        <div class="dropdown-menu menu-drop-user">
                            <div class="profilemenu ">
                                <div class="user-detials">
                                    <a href="">
                                        <span class="profile-content">
                                            <span><?php echo $getDetails['data']['fullnames']; ?></span>
                                            <span><?php echo $getDetails['data']['email']; ?></span>
                                        </span>
                                    </a>
                                </div>
                                <div class="subscription-logout">
                                    <a href="./../managementfiles/php_scripts/log_user_out.php">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- /User Menu -->
                </ul>
            </div>
            
        </div>
        <!-- /Header -->
        
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <div class="sidebar-logo">
                    <a href="index.html">
                        <img src="../assets/img/logo.svg" class="img-fluid logo" alt="">
                    </a>
                    <a href="index.html">
                        <img src="../assets/img/logo-small.svg" class="img-fluid logo-small" alt="">
                    </a>
                </div>
                <div class="siderbar-toggle">
                    <label class="switch" id="toggle_btn">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
            
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title m-0">
                            <h6>Home</h6>
                        </li>
                        <li>
                            <a href="index.php" class="<?php if($pageName==$index){echo "active";} ?>"><i class="fe fe-grid"></i> <span>Dashboard</span></a>
                        </li>

                        <?php if($getDetails['data']['userrole']=='System User'){}else{ ?>

                        <li class="menu-title">
                            <h6>Users</h6>
                        </li>
                        <li>
                            <a href="manage_users.php" class="<?php if($pageName==$manageusers || $pageName==$newusers){echo "active";} ?>"><i class="fe fe-user-plus"></i> 
                                <span>Manage users</span>
                            </a>
                        </li>

                            <?php } ?>
                        <li class="menu-title">
                            <h6>Others</h6>
                        </li>
                        <li>
                            <a href="clinic_system.php" class="<?php if($pageName==$clinicsystem){echo "active";} ?>" ><i class="fe fe-heart"></i> <span>Clinic System</span></a>
                        </li>
                        <li>
                            <a href="legal_system.php" class="<?php if($pageName==$legalsystem){echo "active";} ?>"><i class="fe fe-briefcase"></i> 
                                <span>Legal System</span>
                            </a>
                        </li>
                        <li>
                            <a href="future_system.php" class="<?php if($pageName==$futuresystem){echo "active";} ?>"><i class="fe fe-target"></i> 
                                <span>Future Systems</span>
                            </a>
                        </li>
                        <li>
                            <a href="contact_system.php" class="<?php if($pageName==$contactsystem){echo "active";} ?>"><i class="fe fe-phone-outgoing"></i> 
                                <span>Contact Systems</span>
                            </a>
                        </li>
                        <li class="menu-title">
                            <h6>Communications</h6>
                        </li>
                        <li>
                            <a href="chat.php" class="<?php if($pageName==$chat){echo "active";} ?>"><i class="fe fe-message-square"></i> <span>Chat</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->