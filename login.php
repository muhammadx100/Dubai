
<?php
   session_start();
      
      if( isset($_SESSION["user_visit"]) && ($_SESSION["user_visit"]== "true")){
             header("Location: http://127.0.0.1/dubai/user-profile.php");
             return 0;
      }
     
?>



<!DOCTYPE html>
<html>
      <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<head>
  <link href="Styles/login.css" rel="stylesheet">

</head>

<body>


        <div class="login_form">
                   <?php
                              if(isset($_GET["error"])){
                                    $error = $_GET["error"];
                                    if($error){
                                          echo "Invalid user or password";
                                    }
                              }
                   ?>
            
              <form method="POST" action="http://127.0.0.1/dubai/login-data.php">
                  <input name="login" class="login" type="text" placeholder="Login"> 
                  <br>
                  <input name="password"  class="password" type="password" placeholder="Password"> <br>
                 <input type="checkbox" > <label class="label">conformation</label>
                  <br>
                  <div> 
                           <button type="reset" class="reset_btn">Reset</button>
                           <button type="submit" class="submit_btn">Login</button>
                  </div>

                 <button type="button" class="Sign_up_btn"> <a href="signup.php"> Sign Up</a></button>

                  
              </form>
             

        </div>

</body>

</html>






