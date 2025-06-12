<?php
               include 'header.php';
               include 'sliding-window.php';
             
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS Styles -->
   <link  href="Styles/navbar.css" rel="stylesheet">
   <link  href="Styles/property_details.css" rel="stylesheet"> 
   <link  href="Styles/about.css" rel="stylesheet">
   <link  href="Styles/extra_detail.css" rel="stylesheet"> 
   <link  href="Styles/services.css" rel="stylesheet"> 
   <link  href="Styles/rating.css" rel="stylesheet"> 
   <link  href="Styles/blog.css" rel="stylesheet">
   <link  href="Styles/contact_detail.css" rel="stylesheet">
   <link  href="Styles/overall_services.css" rel="stylesheet"> 
   <link  href="Styles/footer.css" rel="stylesheet">
   <link  href="Styles/side_fixed_display.css" rel="stylesheet">
   <link  href="Styles/login_form.css" rel="stylesheet">
   <link  href="Styles/user-profile.css" rel="stylesheet">
  
   
   <!-- Images -->
   <link href="images/front_picture.jpeg"> 

   <!--Bootstrap-->

   <style>
        :root {
            --primary-color: #3498db;
            --purple-50: #f5f3ff;
            --purple-100: #ede9fe;
            --purple-200: #ddd6fe;
            --purple-300: #c4b5fd;
            --purple-400: #a78bfa;
            --purple-500: #8b5cf6;
            --purple-600: #7c3aed;
            --purple-700: #6d28d9;
            --purple-800: #5b21b6;
            --purple-900: #4c1d95;
            --pink-50: #fdf2f8;
            --pink-100: #fce7f3;
            --pink-200: #fbcfe8;
            --pink-300: #f9a8d4;
            --pink-400: #f472b6;
            --pink-500: #ec4899;
            --pink-600: #db2777;
            --pink-700: #be185d;
            --pink-800: #9d174d;
            --pink-900: #831843;
            --indigo-50: #eef2ff;
            --indigo-100: #e0e7ff;
            --indigo-200: #c7d2fe;
            --indigo-300: #a5b4fc;
            --indigo-400: #818cf8;
            --indigo-500: #6366f1;
            --indigo-600: #4f46e5;
            --indigo-700: #4338ca;
            --indigo-800: #3730a3;
            --indigo-900: #312e81;
            --cyan-500: #06b6d4;
            --cyan-600: #0891b2;
            --content-color: #333;
        }
        </style>
          <style>
        /* Root variables for colors and fonts */
        :root {
            --color-bg: #ffffff;
            --color-text: #374151; /* Dark gray for text */
            --color-muted-text: #6b7280; /* Neutral gray */
            --color-accent: rgb(38, 38, 124); /* Dark blue for accents */
            --color-border: #d1d5db; /* Light gray border */
            --color-shadow: rgba(0, 0, 0, 0.1);
            --font-family: 'Arial', sans-serif;
            --transition-duration: 0.3s;
            --border-radius: 0.75rem;
        }

        body {
            font-family: var(--font-family);
            background-color: #f0f2f5;
            margin: 0;
            padding: 20px;
        }

        #property-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            padding: 30px;
            margin: 80px;
        }

        .property-item {
            position: relative;
            background-color: rgba(255, 255, 255, 0.95);
            padding: 15px;
            border-radius: var(--border-radius);
            box-shadow: 0 2px 6px var(--color-shadow);
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            transition: box-shadow 0.3s ease;
        }

        .property-item:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .property-item h3,
        .property-item h4 {
            margin-top: 10px;
            margin-bottom: 10px;
            width: 100%;
        }

        .property-item h3 {
            color: orangered;
            font-size: 20px;
            line-height: 1.2;
        }

        .property-item h4 {
            color: var(--color-accent);
            font-size: 20px;
            line-height: 1.2;
        }

        .property-item p {
            margin: 5px 0;
            color: var(--color-text);
            font-size: 14px;
            line-height: 1.4;
            flex-grow: 1;
        }

        .property-item img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            margin-top: 15px;
            object-fit: cover;
            transition: transform 0.15s;
        }

        .property-item:hover img {
            transform: scale(1.05);
        }

        /* Editable form inside card */
        .edit-form {
            display: none;
            flex-direction: column;
            gap: 10px;
            margin-top: 10px;
        }

        .edit-form input[type="text"],
        .edit-form input[type="number"] {
            width: 100%;
            padding: 8px 10px;
            font-size: 1rem;
            border-radius: var(--border-radius);
            border: 1.5px solid var(--color-border);
            transition: border-color var(--transition-duration);
            font-family: var(--font-family);
        }
        .edit-form input[type="text"]:focus,
        .edit-form input[type="number"]:focus {
            border-color: var(--color-accent);
            outline: none;
            box-shadow: 0 0 5px rgba(38, 38, 124, 0.3);
        }
        
        .edit-form .button-group {
            display: flex;
            gap: 10px;
            justify-content: flex-end;
        }
        .edit-form button {
            padding: 8px 16px;
            font-size: 1rem;
            border-radius: var(--border-radius);
            border: none;
            cursor: pointer;
            transition: background-color var(--transition-duration);
            font-weight: 600;
            user-select: none;
        }
        .edit-form .save-btn {
            background-color: var(--color-accent);
            color: white;
        }
        .edit-form .save-btn:hover,
        .edit-form .save-btn:focus {
            background-color: rgb(28, 28, 96);
            outline: none;
        }
        .edit-form .cancel-btn {
            background-color: #e2e8f0;
            color: var(--color-text);
        }
        .edit-form .cancel-btn:hover,
        .edit-form .cancel-btn:focus {
            background-color: #cbd5e1;
            outline: none;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            #property-list {
                grid-template-columns: repeat(1, 1fr);
                padding: 10px;
                margin: 20px;
            }
        }
    </style>

  <title>Document</title>
</head>
<body>

      
  
        <section class="HomePage">
             

          <!-- <div class="card">
             
               <div class="CEO_card">
                     <img src="images/Sheik_photo.png" alt="CEO_Image ">
                     <h4>Co-Founder</h4>
                     <h3>Rehman-Ibn-Abubakkar</h3>
          </div> -->

         
              

          </div>

          <div class="center_contant">
                          
               <h1> The perfect place to Live with your family</h1>
                            <pre>Our highly educated staff will make sure that your project 
                will be finished on time and specified budget.</pre>
             
                <button class="Explore_btn"> <a href="properties.php"> Explore Property </a> </button>
                
          </div>

      </section>


      <!-- properties -->
        <?php
?>

<html>
<head>
   




<div id="property-list">
    <?php
    include 'database.php';
    
    function fetchAllProperties($connection) {
        $properties = [];
        $sql = "SELECT * FROM propertydetail"; 
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $properties[] = $row;
            }
        }
        return $properties;
    }

    function getImageUrl($imagePath) {
        return $imagePath;
    }

    $properties = fetchAllProperties($connection);
    
    if (!empty($properties)) {
        foreach ($properties as $property) {
            $id = htmlspecialchars($property["id"]);
            $imgUrl = !empty($property["image"]) ? htmlspecialchars(getImageUrl($property["image"])) : "";
            $price = htmlspecialchars($property["price"]);
            $title = htmlspecialchars($property["title"]);
            $address = htmlspecialchars($property["address"]);
            $bedroom = htmlspecialchars($property["bedroom"]);
            $bathroom = htmlspecialchars($property["bathroom"]);
            $parking = htmlspecialchars($property["parking"]);
            $area = htmlspecialchars($property["area"]);

            echo "<div class='property-item' data-id='$id'>";
            // Image
            if ($imgUrl) {
                echo "<img src='$imgUrl' alt='Property Image'>";
            } else {
                echo "<p>No image available.</p>";
            }

            // Display mode content container
            echo "<div class='view-mode'>";
            echo "<h3>Price: $$price</h3>";
            echo "<h4>$title</h4>";
            echo "<p>Address: $address</p>";
            echo "<p>Bedrooms: $bedroom</p>";
            echo "<p>Bathrooms: $bathroom</p>";
            echo "<p>Parking Spots: $parking</p>";
            echo "<p>Area (sq ft): $area</p>";
            echo "</div>";

            // Removed update button and edit form

            echo "</div>"; // property-item end
        }
    } else {
        echo "<p>No properties found.</p>";
    }
    ?>
</div>






     <!-- <section class="property_details">
            <div class="bar">
                <p> | <span class="number">02</span> Properties  |</p>
               <h1>Properties for sale in your favorite area</h1>
            </div>
            
        <div class="property_cards ">

            <div class="card-1">
                  <div lass="thumbnail"> <img class="thumbnail-img" src="images/thumbnail-1.jpg" > </div>
                  <div class="price-div"> 
                          <h1 class="price">$3200/MO</h1> 
                          <button onclick='window.location.href="/Dubai/agent-1.php"' type="button" class="price-btn">For Rent</button>
                  </div>

                  <div class="location"> 
                         <h1>Comfortable Apartment In - Downtown Dubai</h1>
                         <p>229 Elm Steet, unit 3, Downtown Dubai 00213</p>
                  </div>


                  <div class="facilities">
                       <div class="child-div" >  <img src="images/single-bed.png">  <h3> | 3 beds</h3> </div>
                       <div class="child-div" >  <img src="images/bath-tub.png"> <h3> | 2 Baths</h3>  </div>
                       <div class="child-div" >  <img src="images/car.png">      <h3> | 1 Park</h3></div>
                       <div class="child-div" > <img src="images/length.png">   <h3> | 120 sqft</h3> </div>
                
                  </div>
            </div>


              <div class="card-1">
                  <div lass="thumbnail"> <img class="thumbnail-img" src="images/thumbnail-2.jpg" > </div>
                  <div class="price-div"> 
                          <h1 class="price">$1200/MO</h1> 
                          <button onclick='window.location.href="/Dubai/agent-2.php"' type="button" class="price-btn">For Rent</button>
                  </div>

                  <div class="location"> 
                         <h1>Comfortable Apartment In - Downtown Dubai</h1>
                         <p>229 Elm Steet, unit 12, Downtown Dubai 00213</p>
                  </div>


                  <div class="facilities">
                       <div class="child-div" >  <img src="images/single-bed.png">  <h3> | 1 beds</h3> </div>
                       <div class="child-div" >  <img src="images/bath-tub.png"> <h3> | 1 Baths</h3>  </div>
                       <div class="child-div" >  <img src="images/car.png">      <h3> | 1 Park</h3></div>
                       <div class="child-div" > <img src="images/length.png">   <h3> | 100 sqft</h3> </div>
                
                  </div>
            </div>


              <div class="card-1">
                  <div lass="thumbnail"> <img class="thumbnail-img" src="images/thumbnail-3.jpg" > </div>
                  <div class="price-div"> 
                          <h1 class="price">$8000/MO</h1> 
                          <button onclick='window.location.href="/Dubai/agent-3.php"' type="button" class="price-btn">For Rent</button>
                  </div>

                  <div class="location"> 
                         <h1>Comfortable Apartment In - Downtown Dubai</h1>
                         <p>229 Elm Steet, unit 15, Downtown Dubai 00213</p>
                  </div>


                  <div class="facilities">
                       <div class="child-div" >  <img src="images/single-bed.png">  <h3> | 4 beds</h3> </div>
                       <div class="child-div" >  <img src="images/bath-tub.png"> <h3> | 3 Baths</h3>  </div>
                       <div class="child-div" >  <img src="images/car.png">      <h3> | 1 Park</h3></div>
                       <div class="child-div" > <img src="images/length.png">   <h3> | 220 sqft</h3> </div>
                
                  </div>
            </div>



              <div class="card-1">
                  <div lass="thumbnail"> <img class="thumbnail-img" src="images/thumbnail-4.jpg" > </div>
                  <div class="price-div"> 
                          <h1 class="price">$10,000/MO</h1> 
                          <button onclick='window.location.href="/Dubai/agent-1.php"' type="button" class="price-btn">For Rent</button>
                  </div>

                  <div class="location"> 
                         <h1>Comfortable Apartment In - Downtown Dubai</h1>
                         <p>229 Elm Steet, unit 15, Downtown Dubai 00213</p>
                  </div>


                  <div class="facilities">
                       <div class="child-div" >  <img src="images/single-bed.png">  <h3> | 5 beds</h3> </div>
                       <div class="child-div" >  <img src="images/bath-tub.png"> <h3> | 5 Baths</h3>  </div>
                       <div class="child-div" >  <img src="images/car.png">      <h3> | 1 Park</h3></div>
                       <div class="child-div" > <img src="images/length.png">   <h3> | 350 sqft</h3> </div>
                
                  </div>
            </div>


            <div class="card-1">
                  <div lass="thumbnail"> <img class="thumbnail-img" src="images/thumbnail-5.jpg" > </div>
                  <div class="price-div"> 
                          <h1 class="price">$2200/MO</h1> 
                          <button onclick='window.location.href="/Dubai/agent-2.php"' type="button" class="price-btn">For Rent</button>
                  </div>

                  <div class="location"> 
                         <h1>Comfortable Apartment In - Downtown Dubai</h1>
                         <p>229 Elm Steet, unit 10, Downtown Dubai 00213</p>
                  </div>


                  <div class="facilities">
                       <div class="child-div" >  <img src="images/single-bed.png">  <h3> | 2 beds</h3> </div>
                       <div class="child-div" >  <img src="images/bath-tub.png"> <h3> | 1 Baths</h3>  </div>
                       <div class="child-div" >  <img src="images/car.png">      <h3> | 1 Park</h3></div>
                       <div class="child-div" > <img src="images/length.png">   <h3> | 100 sqft</h3> </div>
                
                  </div>
            </div>



              <div class="card-1">
                  <div lass="thumbnail"> <img class="thumbnail-img" src="images/thumbnail-6.jpg" > </div>
                  <div class="price-div"> 
                          <h1 class="price">$7800/MO</h1> 
                          <button  onclick='window.location.href="/Dubai/agent-3.php"' type="button" class="price-btn">For Rent</button>
                  </div>

                  <div class="location"> 
                         <h1>Comfortable Apartment In - Downtown Dubai</h1>
                         <p>229 Elm Steet, unit 2, Downtown Dubai 00213</p>
                  </div>


                  <div class="facilities">
                       <div class="child-div" >  <img src="images/single-bed.png">  <h3> | 5 beds</h3> </div>
                       <div class="child-div" >  <img src="images/bath-tub.png"> <h3> | 3 Baths</h3>  </div>
                       <div class="child-div" >  <img src="images/car.png">      <h3> | 1 Park</h3></div>
                       <div class="child-div" > <img src="images/length.png">   <h3> | 220 sqft</h3> </div>
                
                  </div>
            </div>
    

        </div >

                 <div class="touch_with_us_btn">
                <button > <a href="contact.php">Touch with Us</a></button>
                 </div>


      </section> -->





      <!--Services-->

        <section class="customer_Benefit">
                                
                                <div class="header">
                                        <div> <h6>|  <span class="span_03">03</span> Why Choose  |</h6></div>
                                        <div> <h1> Why Choose Our Properties Of 
                                                Real Estate Industries   </h1></div>
                                                
                                </div>
                        
                                <div class="images_proof">
                                
                                        <div> <img src="images/trust.png"> </div>
                                        <div> <img src="images/prime_location.png"> </div>
                                        <div> <img src="images/Budget_Friendly.png"> </div>

                                </div>
        </section>

        <section id="services" class="services">

                                <div class="services-TOP"> 
                                        <h6>|  <span>05</span> SERVICES  |</h6>
                                        <h1>See How Can Help</h1>
                                </div>

                                <div class="services-mid"> 
                                                <div > <img src="images/services/rent_a_home.png">
                                                <h2>Rent a Home</h2>
                                                <h6> Whether you’re looking for a single-family home, high-rise 
                                                        apartment, or something in between, we’ll help you find it.</h6>
                                                </div>

                                                <div> <img src="images/services/sell_a_home.png">
                                                <h2>Sell a Home</h2>
                                                <h6> No matter what path you take to sell your home, we can help
                                                        you navigate a successful sale value for your beloved property.</h6>
                                                </div>

                                                <div> <img src="images/services/buy_home.png">
                                                <h2>Buy a Home</h2>
                                                <h6> Find your place with an immersive photo experience and
                                                        the most listings, including things you won’t find anywhere else.</h6>
                                                </div>
                                </div>


                                <div class="services-bottom" >
                                                <div> <img src="images/services/Experience_agent.png">
                                                <h2>Experience Agent</h2>
                                                <h6>As the top agent in the Bay Area, Ken has exclusive connections and 
                                                        access to off-market properties.</h6>
                                                </div>

                                                <div> <img src="images/services/member_support.png">
                                                <h2>Member Support</h2>
                                                <h6> Clients receive access to interior designers, handyman services, and
                                                        advantageous pricing from preferred vendors..</h6>
                                                </div>

                                </div>
        </section>
 
    


      
        <?php
          
               include 'rating.php';
        ?>



        <!--Blogs-->
                <section id="blog" class="blog">
                                <div class="blog-header">     
                                        <h5> | <span>06</span> BLOG |</h5>
                                        <h1> Latest Articles </h1>
                                </div>

                                <div class="blog-1">
                                        <img src="images/thumbnail-3.jpg">;
                                        <h6>October 31, 2024 | <span> Sale</span></h6>
                                        <h1> These Beverly Hills Condos Will Have Stunning Amenities Inside and Out </h1>
                                </div>

                                <div class="blog-1">
                                        <img src="images/thumbnail-4.jpg">;
                                        <h6>Jan 01, 2025 | <span> Sale</span></h6>
                                        <h1> These Beverly Hills Condos Will Have Stunning Amenities Inside and Out </h1>
                                </div>

                                <button>See All Articles</button>

                </section>
        


</body>
</html>


<?php
              
               include 'footer.php';
?>
