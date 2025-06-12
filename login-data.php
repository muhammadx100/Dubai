<?php
      include 'database.php';

      session_start();
     
      $user_login =  $_POST ["login"];
      $user_password = $_POST["password"];

      $sql = "SELECT * FROM logindata WHERE userlogin =  '$user_login' AND userpassword = '$user_password' ";

    $db_responce = $connection->query($sql);

     

    if($db_responce->num_rows> 0){

              $_SESSION["user_visit"] = "true";

           while( $rows = $db_responce->fetch_assoc()){
                   $_SESSION["user_id"] = $rows["id"];
                   $_SESSION["user-Name"] = $rows["fullname"];
                   $_SESSION["user-data"] = $rows;
             }


           
           


            header("Location: http://127.0.0.1/dubai/user-profile.php");
          
            

    }
   else{
         header("Location: http://127.0.0.1/dubai/login.php?error=1");
   }
?>
