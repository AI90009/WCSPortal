<?php

include("../php_scripts/functions.php");
// Enable error reporting
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);


// Enable CORS
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type, Authorization');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user_fullnames = validate($_POST['user_fullnames']);
    $usernames = validate($_POST['usernames']);
    $user_email = validate($_POST['user_email']);
    $user_phone = validate($_POST['user_phone']);
    $user_pass = validate($_POST['user_pass']);
    $user_role = validate($_POST['user_role']);
    $user_state = validate($_POST['user_state']);
    $lawyer_specialization = validate($_POST['lawyer_specialization']);
    $lawyer_sub = validate($_POST['lawyer_sub']);

    $userID = $_SESSION['logged_user_id']['userid'];

    $chk_clients = mysqli_query($con,"select * from clients where username = '$usernames'");

    if(mysqli_num_rows($chk_clients) > 0){
        $response = array(
            'message' => 'Error',
            'data' => 'Username: 1 '.$usernames.' exists please change and TRY AGAIN'
        );
    }else{
        $chk_user = mysqli_query($con,"select * from wc_users where username = '$usernames'");

        if(mysqli_num_rows($chk_user) > 0){
            $response = array(
                'message' => 'Error',
                'data' => 'Username: 2 '.$usernames.' exists please change and TRY AGAIN'
            );
        }else{

             //encrypting password
    $options = ['cost' => 12];
    $hashedpass=password_hash($user_pass, PASSWORD_BCRYPT, $options);

     // Prepare data for insertion
     $data = [
        'fullnames' => $user_fullnames,
        'username' => $usernames,
        'email' => $user_email,
        'contact' => $user_phone,
        'practice_area' => $lawyer_specialization,
        'sub_practice' => $lawyer_sub,
        'password' => $hashedpass,
        'userrole' => $user_role,
        'status' => $user_state,
        'createdby' => $userID,
    ];

    $result = insert('wc_users', $data);

    if ($result) {
        $response = array(
            'message' => 'Success',
            'data' => 'User has been created '
        );
    } else {
        $response = array(
            'message' => 'Error',
            'data' => 'Something is not okay. Please try again. ' . mysqli_error($con)
        );
    }

        }


    }

    
 
} else {
    $response = array(
        'message' => 'Error',
        'data' => 'There is nothing to post. Thanks.'
    );
}

echo json_encode($response);

?>
