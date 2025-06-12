<?php
   include 'C:/xampp1/htdocs/dubai/database.php';
   
   //session start

    session_start(); // Start the session
    // Check if the session variable is set
    $user_id = 0;
    if (isset($_SESSION["user-data"]["ID"])) {
        $user_id = $_SESSION["user-data"]["ID"];
      
    } else {
        echo "Session variable 'user_id' is not set.";
    }


   $property_id = 
   $update_title = $_POST["title"];
   $update_price = $_POST["price"];
   $update_address = $_POST["address"];
   $update_bedroom = $_POST["bedroom"];
   $update_bathroom = $_POST["bathroom"];
   $update_parking = $_POST["parking"];
   $update_area = $_POST["area"];

   //image
   $file = $_FILES["image"]["name"];
 
    if($file){
        $file_extension = pathinfo($file, PATHINFO_EXTENSION); // returns .png or .jpg
        $temporary_path = $_FILES["image"]["tmp_name"]; // returns the temporary path of the file
        $permanent_path = "property_img/dp_".time().".".$file_extension; // dp_12748392311.jpg

        // move the uploaded file from temporary folder to uploads 
        move_uploaded_file($temporary_path, $permanent_path);
    }else{
        $permanent_path = $_SESSION["user-data"]["profileimg"];
    }

   //sql query
   $query = "UPDATE propertydetail SET title = ' $update_title', price = '$update_price'
   , address = '$update_address', bedroom = '$update_bedroom', bathroom = '$update_bathroom',
    parking = '$update_parking', area = '$update_area', image = '$permanent_path' WHERE id='$user_id';
 
?>