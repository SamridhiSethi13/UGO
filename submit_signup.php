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
        $user_type  = $_POST['user_type'];
        $username = $_POST['username'];
        $password= $_POST['password'];


        $sql = "INSERT INTO  login (tid, username, password) 
        VALUES ('".$user_type."','".$username."','".$password."');";
     
        //execute the querry
        if($conn->query($sql) == true){
            //flag for successfully inserted
            $insert = true ;
            header("location: signin.php"); 
        } 
        else{
            echo "ERROR : $sql <br> $conn->error";
        }  
    }
    //close the database connection
    $conn->close();
?>
<html>
  <head>
    <title>Register Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
                .container {
        width: 500px;
        margin: 0 auto;
        text-align: center;
        padding: 20px;
        }
        body{
            width: 100%;
            height: 100vh;
            background-image: url('https://image.shutterstock.com/image-illustration/abstract-blue-white-gray-polygon-260nw-1451847182.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-direction: column;
        }

        input[type="text"], input[type="number"], input[type="password"] {
        padding: 10px;
        margin: 10px 0;
        width: 100%;
        box-sizing: border-box;
        border-radius: 5px;
        border: 1px solid #ccc;
        }

        input[type="submit"] {
        background-color: #181823;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        }

        input[type="submit"]:hover {
        background-color: #45a049;
        }

    </style>
  </head>
  <body>
    <div class="container">
      <h2>Sign Up</h2>
      <form action="submit_signup.php" method="post">
        <label for="user_type">User Type:</label>
        <input type="integer" id="user_type" name="user_type" required><br><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="text" id="password" name="password" required><br><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="text" id="confirm_password" name="confirm_password" required><br><br>

        <input type="submit" value="Submit">
      </form>
    </div>
  </body>
</html>
