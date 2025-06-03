
<?php
    include 'header.php';
   include 'sliding-window.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!--CSS-->
  <link  href="Styles/quick_contact.css" rel="stylesheet">


</head>
<body>

      <div class="contact_us">
        <div class="company_detail">
             <h1>Contact us For More Information</h1>
             <p>Properland team agents are here to help with all
               your buying, renting, and selling goals. Contact us 
               via the following details to increase your real estate
               knowledge with the trusted expert team.</p>
              
               <div class="email_div">
                    <img src="images/online platform logos/email.png"> <h5>alhazaofficial4@gmail.com</h5>
               </div>

               <div class="phone_div">
                    <img src="images/online platform logos/phone-call.png"> <h5>+92311-0376634</h5>
               </div>

               <h5 class="Location">Location</h5>

               <p>We're located in Dubai and our 
                real estate service will be available in all our Dubai</p>

        </div>


        <div class="user_detail">
               <h1>Quick Contact</h1>
               <p>Contact us via the following details to increase your real 
                estate knowledge with the trusted expert team.</p>

                <form method="POST" action="contact-data.php">
                   <label>Name</label> <br>
                   <input type="text" name="Q-name" placeholder="Enter Your Name"> <br>

                   <label>Email</label> <br>
                   <input type="email" name="Q-email" placeholder="Enter Your Email"> <br>

                    <label>Phone</label> <br>
                   <input type="text" name="Q-phone_number" placeholder="Enter Your Phone Number"> <br>

                   <label>Message</label> <br>
                   <textarea name="Q-message" placeholder="Type your message here"></textarea>


                   <button type="submit"> Submit</button>
                   
                </form>


        </div>

      </div>

      
  
</body>
</html>

<?php
    include 'rating.php';
    include 'footer.php';
?>