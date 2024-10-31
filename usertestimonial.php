<?php 
    include 'connection.php';
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Customer Testimonial</title>
    <style>
        *{
            font-family: "Poppins", sans-serif;
        }
        /* for navbar */
        .container-fluid img{
        height: 80px;
        width: 80px;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            z-index: 1;
        }

        .nav-item:hover .dropdown-menu {
            display: block;
        }

        .nav-account-link{
            display: block;
            background-color:white; 
            border: 2px solid #6b4f4f;
            color: #6b4f4f; 
            transition: 0.3s ease; 
            text-decoration: none;
        }
        .nav-account-link:hover{
            color: white;
            background-color: #6b4f4f;
            text-decoration: none;
        }

        .dropdown-menu a+a{
            background-color: white;
            color: black;
            border: 1px solid #6b4f4f;
        }

        .dropdown-menu{
            background-color: white;
            border: 1px solid #6b4f4f;
            /* color: #d48d78; */
        }

        .dropdown-menu .dropdown-item{
            color: #6b4f4f;
            font-size: medium;
            font-weight: bold;
            /* display: flex;
            justify-content: center; */
            /* align-items: center; */
        }

        .dropdown-menu li:hover {
            background-color: #fcf8f8;
        }

        .dropdown-menu li:hover .dropdown-item{
            background-color: inherit;
        }

        /* not working */
        .dropdown-divider{
            height: 0;
            margin: var(--bs-dropdown-divider-margin-y);
            overflow: hidden;
            border-top: 1px solid var(--bs-dropdown-divider-bg) !important;
            opacity: 1;
        }
        /* not working */

        .nav-item a{
            font-weight:bold;
            font-size:medium;
            color: #6b4f4f;
            transition: 0.3s ease;
        }

        .nav-item a:hover {
            box-shadow:0 3px 0 0 #6b4f4f;
            color: #d48d78;
        }
        .nav-item a.active {
            box-shadow: 0 3px 0 0 #6b4f4f;
        }

        .nav-products-link{
            display: block;
            background-color:white; 
            /* border: 2px solid #6b4f4f; */
            color: #6b4f4f; 
            transition: 0.3s ease; 
            text-decoration: none;
        }

        @media(min-width:992px){
            .navbar-expand-lg .nabar-nav{
                flex-direction: row;
            }
        }


            /* for testmonials work */
            .testimonial-form-container {
            font-family: "Poppins", sans-serif;
            background: url(images/testimonial_img.jpg) no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 92vh;
            margin: 0;
            color: #fff;
            padding: 20px;
        }

        /* Styling the testimonial form */
        .testimonial-form {
            padding: 10px;
            max-width: 700px;
            text-align: center;
        }

        /* Heading of the testimonial form */
        .testimonial-form-title {
            margin-bottom: 35px;
            text-align: center;
            font-size: 45px;
            color: #bd7559;
            font-weight: normal;
        }

        /* Label styling */
        .testimonial-form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            font-size: 25px;
            color: #000000;
        }

        /* Input and textarea styling */
        .testimonial-form input, .testimonial-form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            font-size: 24px;
            background: rgba(255, 255, 255, 0.8);
            color: #333;
            box-sizing: border-box;
        }

        /* Input and textarea focus styling */
        .testimonial-form input:focus, .testimonial-form textarea:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.9);
        }

        /* Button styling */
        .testimonial-form button {
            font-family: "Poppins", sans-serif;
            background-color: #bd7559;
            border: none;
            color: #0c0606;
            text-decoration: none;
            font-family: fangsong;
            padding: 10px 28px;
            font-size:23px;
            width: 200px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-weight: bold;
            transition: 0.5s ease;
        }

        /* Button hover effect */
        .testimonial-form button:hover {
            box-shadow: 0 40px 60px rgba(228, 217, 217, 0.5);
            background-color: rgb(10, 8, 8);
            color: #ffffff;
        }
        .testimonial-form button:active {
        transform: scale(0.98);
        }
        /* Message styling */
        .testimonial-form-message {
            margin-top: 20px;
            text-align: center;
            font-size: 16px;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .testimonial-form {
                padding: 20px;
            }

            .testimonial-form-title {
                font-size: 40px;
            }

            .testimonial-form input, .testimonial-form textarea {
                padding: 10px;
            }

            .testimonial-form button {
                padding: 10px;
            }
        }

/* for footer section */
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
<!-- for navbar -->
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
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel" style="color: #6b4f4f;">GLOWGUIDE</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="products.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="About us.php">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="products.php#category">CATEGORIES</a>
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
              <a class="nav-link mx-lg-2" href="products.php#testimonial">TESTIMONIALS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="products.php#contact">CONTACT</a>
            </li>
          </ul>

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

        </div>
      </div>
    </div>
  </nav>




<!-- for testmonial work -->
    <div class="testimonial-form-container" style="margin-top: 96px;">
        <form action="connection.php" method="post" id="testimonial-form" class="testimonial-form">
            <h1 class="testimonial-form-title">Customer Testimonial</h1>
            <label for="name" style="font-weight: normal;">Name</label>
            <input type="text" class="name" placeholder="Enter your name" id="name" name="name" required>
                
            <label for="email" style="font-weight: normal;">Email (ex:john_doe123@xyz.com)</label>
            <input type="email" class="email" placeholder="Ex: john_doe123@xyz.com"  id="email" name="email" required>
                
            <label for="testimonial" style="font-weight: normal;">Testimonial</label>
            <textarea id="testimonial" class="testimonial" placeholder="enter your opinion"  name="testimonial" rows="5" required></textarea>
                
            <button type="submit" value="submit" style="font-family:'Poppins', sans-serif ; font-weight: normal;">Submit</button>
            <div id="message" class="btn"></div>
        </form>
    </div>
    <script >
// document.getElementById('testimonial-form').addEventListener('submit', function(event) {
//     event.preventDefault();

//     const name = document.getElementById('name').value;
//     const email = document.getElementById('email').value;
//     const testimonial = document.getElementById('testimonial').value;

//     if (name && email && testimonial) {
//         document.getElementById('message').textContent = "Thank you for your testimonial!";
//         document.getElementById('message').style.color = "#4CAF50";

//         // Optionally, you can clear the form
//         document.getElementById('testimonial-form').reset();
//     } else {
//         document.getElementById('message').textContent = "Please fill out all fields.";
//         document.getElementById('message').style.color = "#FF0000";
//     }
// });
//
const username = document.querySelector('.name');

const email = document.querySelector('.email');

const testimonial = document.querySelector('.testimonial');

const button = document.querySelector('.btn');

username.addEventListener('click', ()=>{
    username.style.backgroundColor='#ddd3d1';
})

username.addEventListener('blur', ()=>{
    username.style.backgroundColor='white';
})

email.addEventListener('click', ()=>{
    email.style.backgroundColor='#ddd3d1';
})

email.addEventListener('blur', ()=>{
    email.style.backgroundColor='white';
})

testimonial.addEventListener('click', ()=>{
    testimonial.style.backgroundColor='#ddd3d1';
})

testimonial.addEventListener('blur', ()=>{
    testimonial.style.backgroundColor='white';
})

button.addEventListener('click', (event)=>{

    if(username.value == "" || email.value == "" || testimonial.value == ""){
        alert("Form can't be empty");
        event.preventDefault();
    }
})

</script>


<!-- for footer section -->
<footer>
    <!-- <div class="footercontainer">
        <div class="socialicons">
            <a href=""><i class="fa fa-facebook-square" style="font-size:36px"></i></a>
            <a href=""><i class="fa fa-instagram" style="font-size:36px"></i></a>
        </div>
    </div> -->
    <div class="footernav" style="margin-top: -70px;">
     <div class="footernavlist" style="padding-top: 25px;">
        <a href="products.php">Home</a>
        <a href="about us.php">About</a>
        <a href="products.php#category">Categories</a>
        <a href="products.php#testimonial">Testimonials</a>
        <a href="products.php#contact">Contact</a>
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
