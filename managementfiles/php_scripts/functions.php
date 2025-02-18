<?php
use function PHPSTORM_META\type;

ob_start(); session_start(); 

require_once 'config.php';

 
//Input field data validation 
function validate($inputData) {
    global $con;

    // Check if the database connection is valid
    if (!$con || !($con instanceof mysqli)) {
        throw new Exception("Database connection is invalid.");
    }

    // Trim whitespace
    $inputData = trim($inputData);

    // Escape special characters for SQL
    $validatedData = mysqli_real_escape_string($con, $inputData);

    // Return the validated data
    return $validatedData;
}

//Redirect from one page to another with a status message
function redirect($url, $status){
    $_SESSION['status'] = $status;
    header('Location: '.$url); 
    exit(0);
}

//insert record function
function insert($tableName, $data){
    global $con;

    $table = validate($tableName);

    $columns =  array_keys($data);
     $values = array_values($data);

     $finalColumn = implode(',', $columns);
     $finalValues = "'". implode("', '",$values)."'";

     $query = "INSERT INTO $table($finalColumn) VALUES($finalValues)";
     $result = mysqli_query($con,$query);
     return $result;
}

//update record function
function update($tableName, $id, $data){
    global $con;
    $table = validate($tableName);
    $id = validate($id);

    $updateDataString = "";

    foreach($data as $column => $value){
        $updateDataString .= $column.'='."'$value', ";
    }

    $finalUpdateData = substr(trim($updateDataString),0,-1);

    $query = "UPDATE $table SET $finalUpdateData WHERE id = '$id'";
    $result = mysqli_query($con,$query);
    return $result; 
}

//get all data
function getAll($tableName, $status = NULL){
    global $con;

    $table = validate($tableName);
    $status = validate($status);

    if($status == 'status'){
        $query = "SELECT * FROM  $table WHERE status='0'";
    }else{
         $query = "SELECT * FROM  $table";
    }

    $result = mysqli_query($con,$query);
    return $result; 
}

//get only 1 data
function getOne($tableName, $status = NULL){
    global $con;

    $table = validate($tableName);
    $status = validate($status);

    if($status == 'status'){
        $query = "SELECT * FROM  $table WHERE status='0' ORDER BY RAND() LIMIT 1";
    }else{
         $query = "SELECT * FROM  $table ORDER BY RAND() LIMIT 1";
    }

    $result = mysqli_query($con,$query);
    return $result; 
}

//get only 1 data
function getFour($tableName, $status = NULL){
    global $con;

    $table = validate($tableName);
    $status = validate($status);

    if($status == 'status'){
        $query = "SELECT * FROM  $table WHERE status='0' ORDER BY RAND() LIMIT 4";
    }else{
         $query = "SELECT * FROM  $table ORDER BY RAND() LIMIT 4";
    }

    $result = mysqli_query($con,$query);
    return $result; 
}

//get data by id
function getById($tableName,$id){
    global $con;

    $table = validate($tableName);
    $id = validate($id);

    $query = "SELECT * FROM $table  WHERE id = '$id'";
    $result = mysqli_query($con,$query);

    if($result){
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_assoc($result);
             $response = [
            'status' => 200,
            'data' => $row,
            'message' => 'Record found'
        ];
        return $response;
        }else{
            $response = [
                'status' => 404,
                'message' => 'No data found'
            ];
            return $response;
        }
    }else{
         $response = [
            'status' => 500,
            'message' => 'Something is not okay'.mysqli_error($con)
        ];
        return $response;
    }
}

// delete fro database using id
function delete($tableName, $id){
    global $con;

    $table = validate($tableName);
    $id = validate($id);

    $query = "DELETE FROM $table WHERE id = '$id'";

    $result = mysqli_query($con,$query);
    return $result; 
}

//check parameter 
function checkParamID($type){
    if(isset($_GET['id'])){
        if($_GET[$type] != ''){
            return $_GET[$type];
        }else{
            $response = array(
            'error' => 'No ID found'
        );
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
        }
    }else{
       // echo "No ID is given";
        $response = array(
            'error' => 'No ID is given'
        );
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }
}

//destroying session
/*function logoutSession() {
    unset($_SESSION['user_login_state']);
    unset($_SESSION['logged_user_id']);
}*/

// Function to destroy the session and clear session data
function logoutSession() {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }

    session_destroy();
}









?>