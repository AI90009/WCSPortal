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


/*$data = [
    'fullnames' => 'jja',
    'username' => 'ca',
    'email' => 'user_email',
    'contact' => 'user_phone',
    'password' => '$hashedpass',
    'userrole' => 'user_role',
    'status' => 'user_state',
    'createdby' => '1',
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
}*/



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user_fullnames = validate($_POST['user_fullnames']);
    $usernames = validate($_POST['usernames']);
    $user_email = validate($_POST['user_email']);
    $user_phone = validate($_POST['user_phone']);
    $user_pass = validate($_POST['user_pass']);
    $user_role = validate($_POST['user_role']);
    $user_state = validate($_POST['user_state']);

    $userID = $_SESSION['logged_user_id']['userid'];

    
    //encrypting password
    $options = ['cost' => 12];
    $hashedpass=password_hash($user_pass, PASSWORD_BCRYPT, $options);

     // Prepare data for insertion
     $data = [
        'fullnames' => $user_fullnames,
        'username' => $usernames,
        'email' => $user_email,
        'contact' => $user_phone,
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

    /*if(empty($imgz = $_FILES['user_img']['name'])){

         // Prepare data for insertion
         $data = [
            'img_name' => "user-06.jpg",
            'fullnames' => $user_fullnames,
            'username' => $usernames,
            'email' => $user_email,
            'contact' => $user_phone,
            'password' => $hashedpass,
            'userrole' => $user_role,
            'status' => $user_state,
            'createdby' => '$userID',
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

    }else{
        // File upload logic
        $imgz = $_FILES['user_img']['name'];
        $imageTempName = $_FILES['user_img']['tmp_name'];

        $homepageImg = $_FILES['homepageImg']['name'];
        $homepageImgTempName = $_FILES['homepageImg']['tmp_name'];

        $uploadDir = "../../assets/img/campaignImages/";

        // Ensure the upload directory exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Function to handle file upload
        function uploadFile($fileName, $tempName, $uploadDir) {
            $targetFilePath = $uploadDir . basename($fileName);
            $allowedTypes = ['jpg', 'jpeg', 'png'];

            $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
            if (in_array($fileType, $allowedTypes)) {
                if (move_uploaded_file($tempName, $targetFilePath)) {
                    return true; // Return success
                } else {
                    return "Error uploading the file: $fileName."; // Return error message
                }
            } else {
                return "Invalid file type for: $fileName. Allowed types are " . implode(', ', $allowedTypes);
            }
        }

        // Upload both images
        $uploadErrors = [];
        if ($imgz) {
            $uploadResult = uploadFile($imgz, $imageTempName, $uploadDir);
            if ($uploadResult !== true) {
                $uploadErrors[] = $uploadResult;
            }
        }

        if ($homepageImg) {
            $uploadResult = uploadFile($homepageImg, $homepageImgTempName, $uploadDir);
            if ($uploadResult !== true) {
                $uploadErrors[] = $uploadResult;
            }
        }

        if (empty($uploadErrors)) {
            // Prepare data for insertion
            $data = [
                'img_name' => "user-06.jpg",
                'fullnames' => $user_fullnames,
                'username' => $usernames,
                'email' => $user_email,
                'contact' => $user_phone,
                'password' => $hashedpass,
                'userrole' => $user_role,
                'status' => $user_state,
                'createdby' => '$userID',
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
        } else {
            $response = array(
                'message' => 'Error',
                'data' => implode('; ', $uploadErrors) // Combine all upload errors
            );
        }
    }*/

    

} else {
    $response = array(
        'message' => 'Error',
        'data' => 'There is nothing to post. Thanks.'
    );
}

echo json_encode($response);

?>
