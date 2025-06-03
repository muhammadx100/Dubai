<?php

  include 'database.php';



   $User_Email =  $_POST["email"];

   $sql = "INSERT INTO subscriber VALUES(NULL, '$User_Email')";
 

   $db_responce = $connection->query($sql);

   if( $db_responce === true){
     echo "<script>alert('Data Submitted Succesfullt');</script>";
     

   }
   else{
    echo "data Error";
   }


 

           
           

?>