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

  <title>Document</title>
</head>
<body>

      
  
        <section class="HomePage">
             

          <div class="card">
             
               <div class="CEO_card">
                     <img src="images/Sheik_photo.png" alt="CEO_Image ">
                     <h4>Co-Founder</h4>
                     <h3>Rehman-Ibn-Abubakkar</h3>
          </div>

         
              

          </div>

          <div class="center_contant">
                          
               <h1> The perfect place to Live with your family</h1>
                            <pre>Our highly educated staff will make sure that your project 
                will be finished on time and specified budget.</pre>
             
                <button class="Explore_btn"> <a href="properties.php"> Explore Property </a> </button>
                
          </div>

      </section>


      <!-- properties -->
     <section class="property_details">
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


      </section>


      <!--Services-->

        <section class="customer_Benefit">
                                
                                <div class="header">
                                        <div> <h6>|  <span class="span_03">03</span> Why Choose  |</h6></div>
                                        <div> <h1> Why Choose Our Properties Of 
                                                Real Estate Industries   </h1></div>
                                                
                                </div>
                        
                                <div class="images_proof">
                                
                                        <div> <img src="images/trust.jpg"> </div>
                                        <div> <img src="images/prime location.jpg"> </div>
                                        <div> <img src="images/Budget Friendly (1).jpg"> </div>

                                </div>
        </section>

        <section id="services" class="services">

                                <div class="services-TOP"> 
                                        <h6>|  <span>05</span> SERVICES  |</h6>
                                        <h1>See How Can Help</h1>
                                </div>

                                <div class="services-mid"> 
                                                <div > <img src="images/services/rent a home.jpg">
                                                <h2>Rent a Home</h2>
                                                <h6> Whether you’re looking for a single-family home, high-rise 
                                                        apartment, or something in between, we’ll help you find it.</h6>
                                                </div>

                                                <div> <img src="images/services/sell a home.jpg">
                                                <h2>Sell a Home</h2>
                                                <h6> No matter what path you take to sell your home, we can help
                                                        you navigate a successful sale value for your beloved property.</h6>
                                                </div>

                                                <div> <img src="images/services/buy home.jpg">
                                                <h2>Buy a Home</h2>
                                                <h6> Find your place with an immersive photo experience and
                                                        the most listings, including things you won’t find anywhere else.</h6>
                                                </div>
                                </div>


                                <div class="services-bottom" >
                                                <div> <img src="images/services/Experience agent.jpg">
                                                <h2>Experience Agent</h2>
                                                <h6>As the top agent in the Bay Area, Ken has exclusive connections and 
                                                        access to off-market properties.</h6>
                                                </div>

                                                <div> <img src="images/services/member support.jpg">
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
