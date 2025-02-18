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
$userPhotos = getAll('wc_users');

$json_array = array();

$counta = 1;

if ($userPhotos && mysqli_num_rows($userPhotos) > 0) {
    
    //$recordBy = validate($_SESSION['loggedInUser']['userid']);

    foreach ($userPhotos as $userPhotosItem) {

        $userByID = getById('wc_users',$userPhotosItem['createdby']);

        $formattedAppeal = array(
            "id" => $counta,
            "phone" => $userPhotosItem['contact'],
            "role" => $userPhotosItem['userrole'],
            "recordedBy" => '<div class="table-namesplit">
                        <a href="javascript:void(0);" class="table-profileimage">
                            <img src="../assets/img/user1.png" class="me-2" alt="img">
                        </a>
                        <a href="javascript:void(0);" class="table-name">
                            <span>'.$userPhotosItem['fullnames'].'</span>
                            <p>'.$userPhotosItem['email'].'</p>
                        </a>
                    </div>', // Assuming userid is what you want to show
            
            "fullnamed" => $userByID['data']['fullnames'],
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
