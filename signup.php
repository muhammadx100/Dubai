<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 <!--CSS-->
     <link  href="Styles/signup.css" rel="stylesheet">

</head>

  

<body>

            <h1>Sign Up </h1>

  <div class="signup_form">
                
         <form method="POST" action= "/dubai/signup-data.php" enctype= "multipart/form-data">
    
               <label>FullName</label><br>
               <input  name="FullName" class="fullname" type="text" placeholder="Enter Your Name Here"> <br>

      

 
               <label>Date of Birth</label><br>
               <input  name="DOB" class="DOB" type="date" placeholder="Enter Your DOB Here"> <br>
         
               
              
                    <!-- <div>
                    <label>Gender</label> <br>
                    <label>Male</label> <input type="radio" name="Gender" class="Gender">
                    <label>Female</label> <input type="radio" name="Gender" class="Gender"> <br>

                    </div>
                     -->
               <label>Phone Number</label> <br>  <input name="phoneNumber"  class="phoneNumber" type="text" placeholder="Enter Your Number Here"> <br>
      

                    <label>Gmail</label> <br>   <input name="gmail"  class="gmail" type="text" placeholder="Enter Your Gmail Here"> <br>
                    <label>Password</label>  <br>  <input name="Password"  class="Password" type="password" placeholder="Enter Your Password Here"> <br>


                    <label>Photo</label> <br>  
                     <input name="profile_picture"  class="gmail" type="file" > <br>
        

               
               <div>
                  <button type="reset" class="reset">Clear</button>
                  <button type="submit" class="submit">Submit</button>
                
               </div>
           
                
         </form>
  </div>
  
</body>


</html>