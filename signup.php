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
               <input  name="FullName" class="fullname" type="text" placeholder="Enter Your Name Here" required> <br>

      

 
               <label>Date of Birth</label><br>
               <input  name="DOB" class="DOB" type="date" placeholder="Enter Your DOB Here" required > <br>
         
               
              
                    <!-- <div>
                    <label>Gender</label> <br>
                    <label>Male</label> <input type="radio" name="Gender" class="Gender">
                    <label>Female</label> <input type="radio" name="Gender" class="Gender"> <br>

                    </div>
                     -->
               <label>Phone Number</label> <br>  <input name="phoneNumber"  class="phoneNumber" type="text" placeholder="Enter Your Number Here"  
               required  pattern="03[0-9]{2}-[0-9]{7}" title="Please enter a valid Pakistani phone number (e.g., 0300-1234567)">  <br>
      

                    <label>Gmail</label> <br>   
                    <input name="email"  class="email" type="email" placeholder="Enter Your Gmail Here"
                           required   pattern="^[a-zA-Z0-9._%+-]+@gmail\.com$"
                           title="Please enter a valid Gmail address (e.g., ali@gmail.com)"> <br>
                    <label>Password</label>  <br>  <input name="Password"  class="Password" type="password" placeholder="Enter Your Password Here" required > <br>


                    <label>Photo</label> <br>  
                     <input name="profile_picture"  class="gmail" type="file" required > <br>
        

               
               <div>
                  <button type="reset" class="reset">Clear</button>
                  <button type="submit" class="submit">Submit</button>
                
               </div>
           
                
         </form>
  </div>

       <script>
  
           document.addEventListener("DOMContentLoaded", function () {
            const emailInput = document.querySelector(".email");
            const errorMessage = document.getElementById("error-message");

            emailInput.addEventListener("input", function () {
                const emailPattern = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;
                if (!emailPattern.test(this.value)) {
                    this.setCustomValidity("Please enter a valid Gmail address (e.g., ali@gmail.com)");
                    errorMessage.textContent = "Invalid Gmail address!";
                } else {
                    this.setCustomValidity("");
                    errorMessage.textContent = "";
                }
            });

            document.getElementById("emailForm").addEventListener("submit", function (event) {
                if (!emailInput.checkValidity()) {
                    event.preventDefault(); // Prevent form submission if invalid
                    alert("Please enter a valid Gmail address.");
                }
            });
        });
    </script>
  
</body>


</html>