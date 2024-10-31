<?php
  include 'connection.php';
  session_start();
  // if(!isset($_SESSION['email'])){
  //       header('location: login.php');
  //   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- ------SWIPER JS------ -->
  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- -----SCROLL REVEAL----- -->
  <script src="https://unpkg.com/scrollreveal"></script>
  <!-- css links -->
  <link rel="stylesheet" type="text/css" href="products.css" />
  <link rel="stylesheet" href="cep .css">
  <link rel="stylesheet" href="project.css">
  <!-- <script src="cep.js" defer> </script> -->

  <style>
          /* for footer section */
footer{
    background-color: #6b4f4f;
    margin-top: 70px;
    padding-bottom: 50px;
}
.footercontainer{
    width: 100%;
    padding:40px 20px 20px 20px;
}

.footernav{
    margin: 30px 0;
    text-align: center;
}

.footernav .footernavlist a{
    color: #fcf8f8;
    margin: 20px;
    text-decoration: none;
    font-size: 1.3em;
    opacity: 0.7;
    transition: 0.5 s;
}
.footernav .footernavlist a:hover{
    opacity: 1;
}
.footerbottom{
    background-color: #6b4f4f;
    padding: 20px;
    text-align: center;
}
.footerbottom p{
    color: #fcf8f8;
}
.Designer{
    opacity: 0.7;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 400;
    margin: 0px 5px;    
}
  </style>


</head>

<body>
<!--for navbar section-->
  <nav class="navbar navbar-expand-lg fixed-top bg-white">
    <div class="container-fluid">
      <!-- <a class="navbar-brand" href="#">Offcanvas navbar</a> -->
      <img src="images/Logo.png" alt="logo" class="img-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel" style="color: #d48d78;">GLOWGUIDE</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="#home">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="About us.php">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="#category">CATEGORIES</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link mx-lg-2" href="#">PRODUCTS</a>
            </li> -->
            <li class="nav-item dropdown ">
              <a class="nav-link nav-products-link dropdown-toggle"  href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                PRODUCTS
              </a>
              <ul class="dropdown-menu dropdown-products p-0">
                <li><a class="dropdown-item p-2" href="skincare.php">SKINCARE</a></li>
                <li class="dropdown-divider m-0"></li>
                <li><a class="dropdown-item p-2" href="makeup.php">COSMETICS</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="#testimonial">TESTIMONIALS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="#contact">CONTACT</a>
            </li>
          </ul>
          <?php 
            if(isset($_SESSION['email'])){
              ?>
                  <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link mx-lg-2" href="logout.php">LOGOUT</a>
                  </li>
                  </ul>
              <?php
          }
          else {
            ?> 

            
          <ul class="navbar-nav">
            <li class="nav-item dropdown me-5">
              <a class="nav-link nav-account-link dropdown-toggle" style="margin-top: 6px; padding: 13px;" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                ACCOUNT
              </a>
              <ul class="dropdown-menu p-0">
                <li><a class="dropdown-item p-2" href="login.php">USER</a></li>
                <!-- <li class="dropdown-divider m-0"></li>
                <li><a class="dropdown-item p-2" href="#">USER</a></li> -->
              </ul>
            </li>
          </ul>
          <?php
          }
          
          ?>

        </div>
      </div>
    </div>
  </nav>

<!-- for main section -->
<div class="home-container d-flex" style="margin-top: 96px;" id="home">
  <div class="home-content">
      <h1 class="slogan" style="font: weight 2000px; font-size:50px;" >Shop with Conscience,<br> Buy for Peace</h1>
      <p class="home-subheading" style="font-size:x-large;font-weight: normal;">What makes us different?<br>We treat you personally — and honestly.</p>
      <!-- <a href="About us.php"><button class="about-us-button">About us</button></a> -->

      <!-- <form action="about us.php" method="get">
        <input type="submit" value="About Us" class="about-us-button">
      </form> -->
      
      <a href="About us.php" class="about-us-button">About us</a>


  </div>
  <div class="home-image-container">
      <img src="images/main-without-bg.png" alt="Youth Preserve">

  </div>
</div>
<div class="home-bottom-paragraph">
    <p>"Countless individuals have experienced the positive impact of choosing products that support peace and
      justice. Let's face it—there's no quick fix, only conscious choices. That's why we're committed to our
      cause. We believe everyone deserves the chance to make ethical purchasing decisions that align with their
      valuess"</p>
</div>

  
<!-- for products section -->
<div class=" pt-5 homepg-products" style="background-color: white;" id="category">
  <h1 style="color: #6b4f4f; font-weight: bolder; margin-left: 100px;">SHOP FOR PRODUCTS</h1>

  <div class="category">
    <div class="card maincard" style="width: 17rem;height: 25rem;">
      <!-- <img src="..." class="card-img-top" alt="..."> -->
      <div class="card-body">
        <h4 class="card-title" style="color: #6b4f4f; font-weight: bolder; display: flex;justify-content: center;">COSMETICS</h4>
        <img src="images/makeup-category.jfif" style="height: 280px; width:235px;" class="card-img-top" alt="...">
        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        <a href="makeup.php" class="product-button anybtn" id="redirectButton">shop</a>
        <!-- <a href="#" class="product-button anybtn" id="redirectButton">About us</a> -->
      </div>
    </div>
      
    <div class="card maincard" style="width: 17rem;height: 25rem;">
      <div class="card-body">
        <h4 class="card-title" style="color: #6b4f4f; font-weight: bolder; display: flex;justify-content: center;">SKINCARE</h4>
        <img src="images/skincare-category2.jfif" style="height: 280px; width:235px;" class="card-img-top" alt="...">
        <a href="skincare.php" class="product-button anybtn" id="redirectButton">shop</a>
      </div>
    </div>
  </div>
  </div>


<!-- for blog section -->
 <div class="blog d-flex justify-content-center" style="background-color: #f7f2e9;">
 <div id="skin_info col-lg-3 col-md-6 col-sm-12" style="margin-top: 30px;">
      <div class="aligning">
        <div id="first_item">
          <h3 class="nr1">Tired of looking for a non-israeli skin product?</h3>
          <p class="para1">
            Experience our exclusive range of non-Israeli skincare products for
            a refreshing global skincare solution.
          </p>
        </div>
        <div id="second_item">
          <h3 class="nr1">Want to uplift <br />your skin?</h3>
          <p class="para1" style="font-size:small">Use our sustainably <br> crafted, ethically sourced <br> anti-aging cleanser.</p>
        </div>
        <div id="third_item">
          <h3 class="nr1">Carefully <br />crafted</h3>
          <p class="para1">for you.</p>
        </div>
      </div>
      <div class="aligning">
        <div id="fourth_item">
          <h3 class="nr1" id="f1" style="font-size: large;">Best beauty brands</h3>
        </div>
        <div id="fifth_item">
          <h3 class="nr1">Carefully <br />crafted</h3>
          <p class="para1">Created after years  of research</p>
        </div>
        <div id="sixth_item">
          <h3 class="nr1">
            Make a careful choice <br> on what you use<br />and make difference</h3>
          <p class="para1">
            Opt for non-Israeli products <br> to support sustainability <br> and ethical standards.
          </p>
          <a href="skincare.php"><button id="shop-button">Shop Skincare</button></a>
        </div>
      </div>
    </div>
 </div>


 <div class="commitment">
      <div class="commit_img"></div>
      <div class="commit-text">
        <h2 class="head2">Our commitment to sustainability</h2>
        <p class="para2" style="text-align: justify;">
          We want to meet the needs of the present without jeopardizing future
          generations' ability to meet their own.
        </p>
        <p class="para1">
          In our pursuit of sustainability, we choose harmony over harm, opting
          for non-Israeli skin products to uphold ethical standards and respect
          for all beings.
        </p>
        <a href="About us.php"><button id="about-button">More about us</button></a>
      </div>
      <!-- <div class="center-inner">
        <img
          src="pic8.png"
          loading="lazy"
          alt=""
          class="about-us-product-image"
        />
      </div> -->
  </div>


<!-- -----TESTIMONIALS----- -->
<div id="testimonial">
  <!-- ------SECTION-5------ -->
  <div id="section-5" class="context">
    <div style="text-align: center; padding-bottom: 50px;">
      <h1
        style="
          padding-top: 40px;
          letter-spacing: 0.5rem;
        " >
        TESTIMONIALS
      </h1>
    </div>
</div>
  <!-- -----SECTION-6----- -->
  <section class="section-6" >
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="testimonialBox">
              <img class="quote" src="images/quote-right.png" />
              <div class="test-content">
                <p style="margin-top: 85px; color: black">
                  "Finding international skincare brands has never been
                  easier! This site connects me directly to official sources
                  for authentic products."
                </p>
                <p>HAMNAH ADNAN</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonialBox">
              <img class="quote" src="images/quote-right.png" />
              <div class="test-content">
                <p style="margin-top: 85px; color: black">
                  "I love how this site simplifies my search for non-Israeli
                  skincare. It's like having a global skincare store in one
                  click!"
                </p>
                <p>MARIAM ARSHAD</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonialBox">
              <img class="quote" src="images/quote-right.png" />
              <div class="test-content">
                <p style="margin-top: 85px; color: black">
                  "Finding the perfect balance of skincare products has
                  given me the confidence to embrace my natural beauty"
                </p>
                <p>FIZZAH FAROOQ</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonialBox">
              <img class="quote" src="images/quote-right.png" />
              <div class="test-content">
                <p style="margin-top: 85px; color: black">
                  "The products are 100% original. Highly recommend"
                </p>
                <p>DIYA FATIMA</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonialBox">
              <img class="quote" src="images/quote-right.png" />
              <div class="test-content">
                <p style="margin-top: 85px; color: black">
                  "This website exclusively features reliable skincare
                  brands, ensuring I always get top-quality products that
                  deliver results."
                </p>
                <p>LAIBA EMAAN</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <p id="testimonial-intake">
        You can share your opinon here!
        <button id="Write-testimonial"> <a href="usertestimonial.php" id="testimonial-text" >Write testimonial </a> </button>
      </p>
  </section>
</div>


<!-- contact sec -->
<div class="contact-sec" style="margin-top: 210px;">
  <div class="inner"> 
    <div class="maincontactsec" id="contact">
      <div class="contactheading" style="display:flex; justify-content: center;padding-top: 20px; font-size: x-large;">
        <h1 style="color:#6b4f4f;">Contact<span style="color:#d48d78"> Us</span></h1>
      </div>
    </div>
    <div class="contactsec"> 
      <div class="infosec" style="margin-top: 42px;">
        <div class="address">
            <!-- <div><img width="40" height="40" src="images/icon.png" alt="region-code"/></div> -->
            <div><img width="40" height="40" src="https://img.icons8.com/parakeet/48/000000/address.png" alt="address"/></div>
            <h1 style="color:#6b4f4f; font-size:large;">Address</h1>
            <p style="color: #d48d78;font-weight: normal;">Karachi, Pakistan</p>
        </div>
        <div class="phone">
            <div><img width="40" height="40" src="https://img.icons8.com/parakeet/48/phone-disconnected.png" alt="phone"/></div>
            <h1 style="color:#6b4f4f;font-size:large;">Phone</h1>
            <p style="color: #d48d78;font-weight: normal;">+92-123456780-9</p>
        </div>
        <div class="email">
            <div><img width="54" height="54" src="https://img.icons8.com/stickers/100/gmail.png" alt="gmail"/></div>
            <h1 style="color:#6b4f4f;font-size:large;">Email</h1>
            <p style="color: #d48d78;font-weight: normal;">Glowguide@gmail.com</p>
        </div>
      </div>
      <div class="msgsec">
        <div class="msgmytext">
            <h1 style="color:#d48d78;font-size:x-large;">Send us a message</h1>
            <p style="color: #6b4f4f; font-size: large; font-weight: bold;padding-top: 10px;">Have a question in mind? Feel
                free to reach out! We're just a message away and eager to connect.</p>
        </div>

        <div class="inputboxes" >
            <form action="contact.php" method="POST">
                <div class="box1"><input type="text" name="username" placeholder="Enter your name" required></div>
                <div class="box2"><input type="email" name="useremail" placeholder="Enter your email" required></div>
                <div class="box3"><textarea name="message" placeholder="Enter your message" id="" rows="5" required></textarea></div>
                <div class="submitbutton">
                    <input  style="background-color: #6b4f4f;color: #d48d78" type="submit" value="Submit" class="btn">
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".swiper-container", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 100,
      modifier: 2,
      slideShadows: true,
    },
    loop: true,
  });
</script>

<!-- for footer section -->
<footer style="margin-top: -40px;">
    <!-- <div class="footercontainer">
        <div class="socialicons">
            <a href=""><i class="fa fa-facebook-square" style="font-size:36px"></i></a>
            <a href=""><i class="fa fa-instagram" style="font-size:36px"></i></a>
        </div>
    </div> -->
    <div class="footernav">
     <div class="footernavlist">
        <a href="#home">Home</a>
        <a href="about us.php">About</a>
        <a href="#category">Categories</a>
        <a href="#testimonial">Testimonials</a>
        <a href="#contact">Contact</a>
     </div>
    </div>
    <div class="footerbottom">
        <p>Copyright &copy;2024; Glow Guide.<span class="Designer">All rights reserved.</span></p>
    </div>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>

