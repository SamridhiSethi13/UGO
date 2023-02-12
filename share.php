<?php
    $mid=$_GET['mid'];
    $companyid=$_GET['companyid'];
    $pid=$_GET['pid'];
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
    $sql = "INSERT INTO  problem_given_to_company (cid,pid) 
        VALUES ('".$companyid."','".$pid."');";
     
        //execute the querry
        if($conn->query($sql) == true){
            echo '<script>alert("Successfully transfered to company1!"); window.location.href="home_municipality.php"</script>';
        } 
        else{
            echo "ERROR : $sql <br> $conn->error";
        }  
?>
