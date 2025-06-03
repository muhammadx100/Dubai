<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- !-- CSS Styles --> 
   <link  href="Styles/navbar.css" rel="stylesheet">
</head>
<body>
      
      <div class="nav-bar">
                 
                 <img src="images/logo/AL_HAZA__3_-removebg-preview.png" class="logo">

                 
                     <nav >
                        <ul>
                           <li> <a href="index.php"> Home </a></li>
                           <li> <a href="about.php"> About </a></li>
                           <li> <a href="properties.php"> Properties </a></li>
                           <li> <a href="services.php"> Services </a></li>
                           <li> <a href="blog.php"> Blog </a></li>
                           <li> <a href="contact.php"> Contact </a></li>

                           <?php
                               
                                 if(isset($_SESSION["user-data"]["userlogin"]) && ($_SESSION["user-data"]["userlogin"] == "mujkl820@gmail.com" )){
                                   echo '<li><a href="user-profile.php">Admin</a></li>';

                                 }
                                 else{
                                     echo '<li><a href="user-profile.php">client</a></li>';
                                 }
                            ?>

                        </ul>
                     </nav>
                      
            

                 <div> 
                 <button type="button" class=" login_btn " id="loginBtn"> <a href="/Dubai/login.php"> Login </a></button>
                 <button type="button" class=" login_btn " id=""> <a href="/Dubai/signup.php"> Sign up </a></button>
                 </div>

                
          </div>

   
</body>
</html>