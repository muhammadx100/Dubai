<?php
   session_start();

      if( $_SESSION["user_visit"] != "true"){
                header("Location: http://127.0.0.1/dubai/login-data.php");
      } 
     include 'header.php';
     include 'sliding-window.php';
?>




<html> 

<head> 

     <link href="styles/user-profile.css"  rel="stylesheet">

</head>

  <body> 

     <div class="user_profile"> 
              
            
             <img class="profile-img" src="<?php echo  $_SESSION['user-data']['profileimg']; ?>">
             <div> 
                  <h1>  <?php  echo $_SESSION["user-data"]["fullname"]; ?></h1> <br>
                  <h1>  <?php  echo $_SESSION["user-data"]["DOB"]; ?></h1>   <br>
                  <h1>  <?php  echo $_SESSION["user-data"]["userlogin"]; ?></h1> <br>
                  <h1>  <?php  echo $_SESSION["user-data"]["phoneNumber"]; ?></h1> <br>
              <div>
             

     </div>

       

   
       <a  href="logout.php" > Log out </a>
  
   
  </body>
</html>

