<?php

   include 'database.php';
  

   


   $user_Name = $_POST["FullName"];
   $user_DOB = $_POST["DOB"];
   $user_phone_Number = $_POST["phoneNumber"];
   $user_gmail = $_POST["email"];
   $user_password = $_POST["Password"];

   
   $file = $_FILES["profile_picture"]["name"];
   $file_Extension = pathinfo($file, PATHINFO_EXTENSION);
  
   $temporary = $_FILES["profile_picture"]["tmp_name"];
   $permanant = "uplode_img/dp_".time().".".$file_Extension; 
   move_uploaded_file($temporary, $permanant);

    $sql = "INSERT INTO logindata VALUES( NULL, '$user_Name', '$user_DOB', 
    '$user_phone_Number', '$user_gmail', '$user_password', '$permanant')";
    
   
   
    $db_responce = $connection->query($sql);

    
      include 'success-card.php';
  

?>