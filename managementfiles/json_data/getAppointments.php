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
$userPhotos = getAll('appointments');

$json_array = array();

$counta = 1;

if ($userPhotos && mysqli_num_rows($userPhotos) > 0) {
    
    //$recordBy = validate($_SESSION['loggedInUser']['userid']);

    foreach ($userPhotos as $userPhotosItem) {
        //usernames
        $lawByID = getById('wc_users',$userPhotosItem['lawyer_id']);

        //usernames
        $userByID = getById('wc_users',$userPhotosItem['userid']);

        //practice area name
        $practiceByID = getById('practice_areas',$userPhotosItem['practice_area']);

        //practice sub-area name
        $sub_practiceByID = getById('sub_area',$userPhotosItem['sub_practice']);

        $formattedAppeal = array( 

            

            "id" => $counta,

            //appointment description
            "desc" => '<div style="text-align: justify; word-wrap: break-word;  word-break: break-word;   white-space: normal;">'.htmlspecialchars(substr($userPhotosItem['description'], 0, 350), ENT_QUOTES, 'UTF-8') . (strlen($userPhotosItem['description']) > 350 ? '...' : '').'</div>',

            "prac_area" => $practiceByID['data']['area'].' <br> &emsp;  '.$sub_practiceByID['data']['sub_area'],
            "subPrac_area" => '<span class="badge-delete">'.$userPhotosItem['state'].'</span>',

            "client" => '<div class="table-namesplit">
                        <a href="javascript:void(0);" class="table-profileimage">
                            <img src="../assets/img/user1.png" class="me-2" alt="img">
                        </a>
                        <a href="javascript:void(0);" class="table-name">
                            <span>'.$userByID['data']['fullnames'].'</span>
                            <p>'.$userByID['data']['email'].'</p>
                        </a>
                    </div>', 
            
            "lawyer" => '<div class="table-namesplit">
                        <a href="javascript:void(0);" class="table-profileimage">
                            <img src="../assets/img/user1.png" class="me-2" alt="img">
                        </a>
                        <a href="javascript:void(0);" class="table-name">
                            <span>'.$lawByID['data']['fullnames'].'</span>
                            <p>'.$lawByID['data']['email'].'</p>
                        </a>
                    </div>',   
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
