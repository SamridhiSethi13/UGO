<?php
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

    if(isset($_POST['user_type']))
    {
        //collect post variables
        //$_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post"
        $user_type  = $_POST['user_type'];
        $username = $_POST['username'];
        $password= $_POST['password'];


	$sql = "SELECT * FROM login WHERE username='$username'";
	$result = mysqli_query($conn, $sql);
    if($result)
    {
        if (mysqli_num_rows($result) == 1) 
        { //if the data matches with someone
            $result_fetch = mysqli_fetch_assoc($result);
            if($_POST['user_type']==$result_fetch['tid'])
            {
                if(($_POST['password']==$result_fetch['password']))
                {
                //if password matched
                if($_POST['user_type']==1)
                {
        
                header("location: register_complaint.php");
                }
                else if($_POST['user_type']==2)
                {
                    header("location: home_municipality.php"); 
                }
                else {
                    header("location: company.php");
                }
                
                }
            }
        }
    }
    }

 ?>


<html>
  <head>
    <title>SIGN IN Page</title>
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
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        }

        input[type="submit"]:hover {
        background-color: #181823;
        }

    </style>
  </head>
  <body>
    <div class="container">
      <h2>Sign in</h2>
      <form action="signin.php" method="post">
        <label for="user_type">User Type:</label>
        <input type="integer" id="user_type" name="user_type" required><br><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="text" id="password" name="password" required><br><br>

        <input type="submit" value="Submit">
      </form>
    </div>
  </body>
</html>
