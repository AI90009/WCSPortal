<?php
include('../php_scripts/functions.php');

header('Content-Type: application/json');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = validate(htmlspecialchars(trim($_POST['username']), ENT_QUOTES, 'UTF-8'));
    $password = validate(htmlspecialchars(trim($_POST['password']), ENT_QUOTES, 'UTF-8'));

    $query = mysqli_query($con,"SELECT * FROM wc_users WHERE username='$username' ");

    if($query){
        if(mysqli_num_rows($query)==1){
            $row = mysqli_fetch_assoc($query);

            $covertPass = $row['password'];

            if(!password_verify($password,$covertPass)){
                $responseData = array(
                    'message' => 'Error',
                    'data' => 'Your login details are not correct, please try again',
                );
            }else{

                if($row['status']!="Active"){
                        $responseData = array( 
                        'message' => 'Error',
                        'data' => 'Your account has been suspended',
                    );
                }else{
                    $_SESSION['user_login_state'] = true;
                    $_SESSION['logged_user_id'] =[
                        'userid' => $row['id'],
                        'username' => $row['username']
                    ];

                    $responseData = array(
                        'message' => 'Success,',
                        'data' =>  $row['username'].", you have logged in",
                    );

                }

            }
            

        }else{
            $responseData = array(
            'message' => 'Error',
            'data' => 'Your login details are not correct, please try again',
         );
        }

    }else{
        $responseData = array(
            'message' => 'Error',
            'data' => 'Your login details are not correct, please try again ',
         );
    }

   echo json_encode($responseData);
}

?>