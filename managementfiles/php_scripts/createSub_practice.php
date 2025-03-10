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

    $practice_area = validate($_POST['practice_area']);
    $subPractice = validate($_POST['subPractice']);

    $userID = $_SESSION['logged_user_id']['userid'];

     // Prepare data for insertion
     $data = [
        'area_id' => $practice_area,
        'sub_area' => $subPractice,
        'userid' => $userID,
    ];

    $result = insert('sub_area', $data);

    if ($result) {
        $response = array(
            'message' => 'Success',
            'data' => 'Sub-practice has been added '
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
