<?php
session_start(); // Start the session
// Check if the session variable is set

$user_id = 0;
if (isset($_SESSION["user-data"]["ID"])) {
    $user_id = $_SESSION["user-data"]["ID"];
   
} else {
    echo "Session variable 'user_id' is not set.";
}




   $host = "127.0.0.1";
   $username = "root";
   $password = "";
   $database = "dubaiwebsite";

   // Connection
   $connection = new mysqli($host, $username, $password, $database);
    if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
   $update_Name = $_POST["fullname"];
   $update_DOB = $_POST["dob"];
   $update_number = $_POST["phone"];
   $update_Gmail = $_POST["email"];
   $update_pass = $_POST["password"];
   
   //for photo

   

    $file_name = $_FILES["photo"]["name"]; // returns the name of the uploded file
    if($file_name){
        $file_extension = pathinfo($file_name, PATHINFO_EXTENSION); // returns .png or .jpg
        $temporary_path = $_FILES["photo"]["tmp_name"]; // returns the temporary path of the file
        $permanent_path = "property_img/dp_".time().".".$file_extension; // dp_12748392311.jpg

        // move the uploaded file from temporary folder to uploads 
        move_uploaded_file($temporary_path, $permanent_path);
    }else{
        $permanent_path = $_SESSION["user-data"]["profileimg"];
    }

   //query
   if(empty($update_pass)){
    $update_query = "UPDATE logindata 
                        SET fullname = '$update_Name',
                        DOB = '$update_DOB',
                        phoneNumber = ' $update_number',
                        userlogin = '$update_Gmail',
                        profileimg = '$permanent_path'
                        
                    WHERE ID = $user_id
                    ";

   }
   else{
             $update_query = "UPDATE logindata 
                        SET fullname = '$update_Name',
                        DOB = '$update_DOB',
                        phoneNumber = ' $update_number',
                        userlogin = '$update_Gmail',
                        userpassword = '$update_pass',
                        profileimg = '$permanent_path'
                        
                    WHERE ID = $user_id
                    ";
   }
      
  

   //submit query
    $db_response = $connection->query($update_query);

     if($db_response === true){
        
    $select_query = "SELECT * FROM logindata WHERE ID = $user_id";
    $result = $connection->query($select_query);
    
    if ($result) {
        // Fetch the updated data
        while ($row = $result->fetch_assoc()) {
            $_SESSION["user_id"] = $row["ID"];
            $_SESSION["user-Name"] = $row["fullname"];
            $_SESSION["user-data"] = $row;
        }
    } else {
        // Handle the error for the SELECT query
        echo "Error fetching updated record: " . $connection->error;
    }

       include 'C:/xampp1/htdocs/dubai/success-card.php';
       include 'C:/xampp1/htdocs/dubai/logout.php';

    }
    else{
        echo "Error updating record: " . $connection->error;
    }
    // header("Location: http://127.0.0.1/dubai/logout.php");




?>