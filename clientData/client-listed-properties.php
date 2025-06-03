<?php


   session_start();
   
   $host = "127.0.0.1";
   $username = "root";
   $password = "";
   $database = "dubaiwebsite";


   //connection
   $connection = new mysqli($host, $username, $password, $database);

   $title =  $_POST["title"];
   $Price = $_POST["price"];
   $Address = $_POST["address"];
   $Bedrooms = $_POST["bed"];
   $Bathrooms = $_POST["bath"];
   $Parking = $_POST["parking"];
   $Area = $_POST["area"];
   
   //image

   $file = $_FILES["image"]["name"];
   $file_extension = pathinfo($file, PATHINFO_EXTENSION);
   $temporary_file = $_FILES["image"]["tmp_name"];
   $permanant = "property_img/dp_".time().".".$file_extension;
   move_uploaded_file($temporary_file, $permanant);


   $sql = "INSERT INTO propertydetail
    VALUES(NULL, '$title', '$Price', '$Address', '$Bedrooms',
    '$Bathrooms', '$Parking', '$Area', '$permanant')";



   $db_responce = $connection->query($sql);

   if($db_responce === true){
         $_SESSION["data"] = [
          "title" => $title,
          "price" => $price,
          "address" => $address,
          "bedrooms" => $bedrooms,
          "bathrooms" => $bathrooms,
          "parking" => $parking,
          "area" => $area,
          "image" => $permanent_path
         ]
  } 


?>

<?php
 
  include 'C:/xampp/htdocs/dubai/success-card.php';
 ?>
