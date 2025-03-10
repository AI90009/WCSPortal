<?php

include("../php_scripts/functions.php");
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Enable CORS
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type, Authorization');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user_role = validate($_POST['user_role']);
    $lawyer_sub = validate($_POST['lawyer_sub']);
    $choice_of_lawyer = validate($_POST['choice_of_lawyer']);
    $appointment_date = validate($_POST['appointment_date']);
    $user_description = validate($_POST['description']);

    $userID = $_SESSION['logged_user_id']['userid'];

     // Prepare data for insertion
     $data = [
        'practice_area' => $user_role,
        'sub_practice' => $lawyer_sub,
        'lawyer_id' => $choice_of_lawyer,
        'dateofappointment' => $appointment_date,
        'description' => $user_description,
        'state' => "Pending Approval",
        'userid' => $userID,
    ];

    $result = insert('appointments', $data);

    if ($result) {
        $response = array(
            'message' => 'Success',
            'data' => 'You have booked an appointment'
        );
    } else {
        $response = array(
            'message' => 'Error',
            'data' => 'Something is not okay. Please try again. ' . mysqli_error($con)
        );
    }

 
} else {
    $response = array(
        'message' => 'Error',
        'data' => 'There is nothing to post. Thanks.'
    );
}

echo json_encode($response);

?>
