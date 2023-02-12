<?php
    //set a connection variable
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ugo";

    //create a database connection
    $conn = new mysqli($server , $username , $password, $dbname);

    //check for connection status
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $insert = false;

    //isset-checks whether a variable is set and is not NULL
    if(isset($_POST['user_type'])){
        //collect post variables
        //$_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post"
        $user_type  = 1;
        $username = $_POST['email'];
        $password= $_POST['password'];


        $sql = "INSERT INTO  login (tid, username, password) 
        VALUES ('".$user_type."','".$username."','".$password."');";
     
        //execute the querry
        if($conn->query($sql) == true){
            //flag for successfully inserted
            $insert = true ;
            echo "successfully inserted";
        } 
        else{
            echo "ERROR : $sql <br> $conn->error";
        }  
    }
    //close the database connection
    $conn->close();
?>