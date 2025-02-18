<?php 
//User permission check
ob_start(); session_start(); 
require_once("functions.php");

$loggedEmployee = validate($_SESSION['logged_user_id']['userid']);
$getDetails = getById('wc_users',$loggedEmployee);


    if($getDetails['data']['userrole']=="System User"){
        echo '<script>window.location.href = "../../system_user/index.php"</script>';
    }else{
        echo '<script>window.location.href = "../../admin/index.php"</script>';
    }

?> 