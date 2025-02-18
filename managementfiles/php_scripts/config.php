<?php

    define('DB_SERVER',"localhost");
    define('DB_USERNAME',"root");
    define('DB_PASSWORD',"");
    define('DB_DATABASE',"wc_connect_db");

    $con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    if(!$con){
        echo "Connection failed: ".mysqli_connect_error();
    }else{
       // echo "Success";
    }



?>