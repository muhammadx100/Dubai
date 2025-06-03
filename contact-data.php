<?php
     include 'database.php';
  

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST["Q-name"] ;
    $user_email = $_POST["Q-email"];
    $phoneNumber = $_POST["Q-phone_number"];
    $user_message = $_POST["Q-message"] ;
    }



 

    $sql = "INSERT INTO quickcontact VALUES(NULL, '$user_name',
      '$user_email', '$phoneNumber', '$user_message')";

        echo   $sql;

      $db_responce = $connection->query($sql);

      if( $db_responce === true){
        echo "data submittes";
      }

      else{
        echo "error in data";
      }




?>