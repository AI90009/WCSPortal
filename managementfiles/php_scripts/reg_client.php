<?php

include("../php_scripts/functions.php");
// Enable error reporting
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/


// Enable CORS
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type, Authorization');


if ($_SERVER['REQUEST_METHOD'] === 'POST') { 

    $client_title = validate($_POST['client_title']);
    $first_name = validate($_POST['first_name']);
    $last_name = validate($_POST['last_name']);
    $client_sex = validate($_POST['client_sex']);
    $userzid = validate($_POST['userzid']);
    $user_email = validate($_POST['user_email']);
    $user_tel = validate($_POST['user_tel']);
    $user_pass = validate($_POST['user_pass']);

    
    //encrypting password
    $options = ['cost' => 12];
    $hashedpass=password_hash($user_pass, PASSWORD_BCRYPT, $options);

    $chk_clients = mysqli_query($con,"select * from wc_users where username = '$userzid'");

    if(mysqli_num_rows($chk_clients) > 0){
        $response = array(
            'message' => 'Error',
            'data' => 'Username '.$userzid.' exists please change and TRY AGAIN'
        );
    }else{ 

        $chk_user = mysqli_query($con,"select * from clients where username = '$userzid'");

        if(mysqli_num_rows($chk_user) > 0){
            $response = array(
                'message' => 'Error',
                'data' => 'Username '.$userzid.' exists please change and TRY AGAIN'
            );
        }else{

     // Prepare data for insertion
     $data = [
        'title' => $client_title,
        'gender' => $client_sex,
        'first_name' => $first_name,
        'last_name' => $last_name,
        'username' => $userzid,
        'email' => $user_email,
        'telphone' => $user_tel,
        'password' => $hashedpass,
    ];

    $result = insert('clients', $data);

    if ($result) {
        $response = array(
            'message' => 'Success',
            'data' => 'Your account has been created and is active '
        );
    } else {
        $response = array(
            'message' => 'Error',
            'data' => 'Something is not okay. Please try again. ' . mysqli_error($con)
        );
    }

        //end data insertion
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