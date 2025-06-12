<?php
   session_start();

   $host = "127.0.0.1";
   $username = "root";
   $password = "";
   $database = "dubaiwebsite";

   // Connection
   $connection = new mysqli($host, $username, $password, $database);

   // Check connection
   if ($connection->connect_error) {
       die("Connection failed: " . $connection->connect_error);
   }

   // Retrieve form data
   $title = $_POST["title"];
   $price = $_POST["price"];  // Ensure consistent variable names
   $address = $_POST["address"];
   $bedrooms = $_POST["bed"];
   $bathrooms = $_POST["bath"];
   $parking = $_POST["parking"];
   $area = $_POST["area"];

   // Image Upload
   if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
       $file = $_FILES["image"]["name"];
       $file_extension = pathinfo($file, PATHINFO_EXTENSION);
       $temporary_file = $_FILES["image"]["tmp_name"];
       $permanent = "property_img/dp_" . time() . "." . $file_extension;

       if (!move_uploaded_file($temporary_file, $permanent)) {
           die("File upload failed.");
       }
   } else {
       die("Invalid image upload.");
   }

   // Insert into database
   $sql = "INSERT INTO propertydetail 
           VALUES (NULL, '$title', '$price', '$address', '$bedrooms', '$bathrooms', '$parking', '$area', '$permanent')";

   $db_response = $connection->query($sql);

   if ($db_response === true) {
       $_SESSION["data"] = [
           "title" => $title,
           "price" => $price,
           "address" => $address,
           "bedrooms" => $bedrooms,
           "bathroom" => $bathrooms,
           "parking" => $parking,
           "area" => $area,
           "image" => $permanent
       ];
   } else {
       die("Error inserting data: " . $connection->error);
   }

   // Close connection
   $connection->close();
?>

<?php
   include 'C:/xampp1/htdocs/dubai/success-card.php';
?>