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
$userPhotos = getAll('clients'); 

$json_array = array();

$counta = 1;

if ($userPhotos && mysqli_num_rows($userPhotos) > 0) {
    
    //$recordBy = validate($_SESSION['loggedInUser']['userid']);

    foreach ($userPhotos as $userPhotosItem) {
        $formattedAppeal = array(
            "id" => $counta,
            "phone" => $userPhotosItem['telphone'],
            "gender" => $userPhotosItem['gender'],
            "recordedBy" => '<div class="table-namesplit">
                        <a href="javascript:void(0);" class="table-profileimage">
                            <img src="../assets/img/user1.png" class="me-2" alt="img">
                        </a>
                        <a href="javascript:void(0);" class="table-name">
                            <span>'.$userPhotosItem['title'].' '.$userPhotosItem['first_name'].' '.$userPhotosItem['last_name'].'</span>
                            <p>'.$userPhotosItem['email'].'</p>
                        </a>
                    </div>', // Assuming userid is what you want to show
            
            "status" => $userPhotosItem['status'],
            "usera" => $userPhotosItem['username'],
            "date" => date('d M, Y', strtotime($userPhotosItem['date_created']))
        );
        $counta++;
        $json_array[] = $formattedAppeal;
    } 
}

// Always return a JSON response
$data = array("data" => $json_array);
echo json_encode($data);
?>