<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include('../php_scripts/functions.php');

// Validate session
/*if (!isset($_SESSION['loggedInUser']['userid'])) {
    echo json_encode(["error" => "Unauthorized access."]);
    exit;
}*/

// Fetch data
$userPhotos = getAll('practice_areas');

$json_array = array();

$counta = 1;

if ($userPhotos && mysqli_num_rows($userPhotos) > 0) {
    
    //$recordBy = validate($_SESSION['loggedInUser']['userid']);

    foreach ($userPhotos as $userPhotosItem) {

        $userByID = getById('wc_users',$userPhotosItem['userid']);

        $formattedAppeal = array(
            "id" => $counta,
            "area" => $userPhotosItem['area'],
            "userid" => $userByID['data']['fullnames'],
            "date" => date('d M, Y', strtotime($userPhotosItem['date_rec']))
        );
        $counta++;
        $json_array[] = $formattedAppeal;
    } 
}

// Always return a JSON response
$data = array("data" => $json_array);
echo json_encode($data);
?>
