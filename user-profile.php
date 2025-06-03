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

    <style>
        .property-card {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px;
            width: 300px;
            background: #f9f9f9;
        }
        .property-card img {
            width: 100%;
            height: auto;
        }
    </style>


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

     <div>   
          
          <button> <a href= "clientData/client-add-new-property.php"> Add Property </a> </button>
          <button> <a href="clientData/client-listed-properties.php"> View Listed Property </a> </button>

     </div>



    <h2>Welcome to Your Dashboard</h2>

    <div id="property-list">
        <?php
       
          
                if (isset($_SESSION["data"])) {
                echo "<h2>Property Details:</h2>";
                echo "<p>Title: " . $_SESSION["data"]["title"] . "</p>";
                echo "<p>Price: $" . $_SESSION["data"]["price"] . "</p>";
                echo "<p>Address: " . $_SESSION["data"]["address"] . "</p>";
                echo "<p>Bedrooms: " . $_SESSION["data"]["bedrooms"] . "</p>";
                echo "<p>Bathrooms: " . $_SESSION["data"]["bathrooms"] . "</p>";
                echo "<p>Parking Spots: " . $_SESSION["data"]["parking"] . "</p>";
                echo "<p>Area (sq ft): " . $_SESSION["data"]["area"] . "</p>";
                echo "<img src='" . $_SESSION["data"]["image"] . "' width='200' alt='Property Image'>";
               } 
     
        ?>
    </div>

</body>
</html>
    

       <a  href="logout.php" > Log out </a>
  
   
  </body>
</html>


