<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link  href="Styles/contact_detail.css" rel="stylesheet">
   <link  href="Styles/overall_services.css" rel="stylesheet">
   <link  href="Styles/footer.css" rel="stylesheet">
</head>
<body>
  




<section class="contact_detail">

                      <div class="contact_detail-1">
                          <div class="online_platforms_detail">
                                <div class="logo-bottom"> <img src="images/logo/AL_HAZA__2_-removebg-preview.png"></div>
                                <div class="online_platforms"> 
                                <a href="https://www.facebook.com/"> <img src="images/online platform logos/facebook.png"></a>
                                <a href="https://www.instagram.com/"> <img src="images/online platform logos/instagram.png"></a>
                                <a href="https://www.linkedin.com/feed/"> <img src="images/online platform logos/linkedin.png"></a>
                             
                                </div>
                          </div>

                          <div class="User_Subscribe">
                                <h1>Get a free estimate</h1>
                                <h6>We have over 10 years of experience in land selling,
                                 building rent and selling service. We take pride in delivering Intelligent in
                                this field. Subscribe with your mail to get instant property details.</h6>

                                <div>
                                        <form method="POST" action="subscribe.php"> 
                                                <input type="email" name="email"
                                                  class="email" placeholder="Your Email address here"
                                                  required 
                                                 pattern="^[a-zA-Z0-9._%+-]+@gmail\.com$"
                                                  title="Please enter a valid Gmail address (e.g., ali@gmail.com)"
                                                  >
                                                <button type="submit" class="Subscribe_btn">Subscribe Now</button>
                                        </form>
                                       
                                </div>  
                          </div>
                      </div>

           </section>





           <section class="overall_services">
               
                        <div class="detail">
                                        <h1>Company</h1>
                                        <h6><a href="about.php"> About</a></h6>
                                        <h6><a href="blog.php"> Blog</a></h6>
                                        <h6><a href="properties.php"> Properties</a></h6>
                                        <h6><a href="agents.php"> Agents</a></h6>
                                        <h6><a href="services.php"> Services</a></h6>
                                        <h6><a href="contact.php"> Contact Us</a></h6>
                              
                        </div>


                        <div class="detail">
                                        <h1>Services</h1>
                                        <h6><a href=""> Rent A Home</a></h6>
                                        <h6><a href=""> Sell A Home</a></h6>
                                        <h6><a href=""> Buy A Home</a></h6>
                                        <h6><a href=""> Property Insurance</a></h6>
                                        <h6><a href=""> Member Support</a></h6>
                                        <h6><a href=""> Experience Agent</a></h6>
                        </div>


                       


                        <div class="Contact_form">
                               <h1>Contact Us</h1>
                               <p> <img src="images/online platform logos/pin.png">329 Queensberry Street, 
                                NorthMelbourne VIC 3051, Dubai.</p>

                                <p> <img src="images/online platform logos/phone-call.png">123 456 7890</p>

                                <p> <img src="images/online platform logos/email.png"> alhazaofficial4@Gmail.com</p>
                        </div>
                  
           </section>
                    

           
      <footer >
            
             <h1> | <span> AL-HAZA  </span>  |the Name of Loyalty</h1>

      </footer>


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

  

