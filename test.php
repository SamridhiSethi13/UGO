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
    if(isset($_POST['problem_category'])){
        //collect post variables
        //$_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post"
        $problem_category  = $_POST['problem_category'];
        $problem_brief = $_POST['problem_brief'];
        $municipality = $_POST['municipality'];
        $location = $_POST['location'];
        $applicant_name = $_POST['applicant_name'];
        $phone_number_of_applicant = $_POST['phone_number_of_applicant'];
        $picture_of_area = date('picture_of_area');


        $sql = "INSERT INTO  complaint (p_name, p_disc, u_name, mid, address, phone_no, picture, uid) 
        VALUES ('".$problem_category."','".$problem_brief."','".$applicant_name."','1','". $location."', '".$phone_number_of_applicant."', '".$picture_of_area."', '2');";
     
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