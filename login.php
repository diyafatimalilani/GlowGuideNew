<?php
    include "connection.php";
    
    // if(!isset($_SESSION['email'])){
    //     header('location: login.php');
    // }
    if(isset($_POST['login']))
    {
        $email=$_POST["email"];
        $password=$_POST["password"];
        $query= "SELECT * FROM `user` WHERE email ='$email' AND password='$password'";
        $result = mysqli_query($conn, $query);
        $name=mysqli_fetch_array($result);
        $num = mysqli_num_rows($result);
        if($num ==1)
        {
            session_start();
            $_SESSION['userid']=$name['userid'];
            $_SESSION['loggedin']=true;
            $_SESSION['email']=$email;
            $_SESSION['name']=$name['name'];
            // $_SESSION['cart']=array();
            
            header('location: products.php');
        }
        // else {
            
        //     $loginerror = "Incorrect email or password.";
        // }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./images/icon.png" />
    <!-- -----FONTS------ -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <!-- -----SCROLL REVEAL----- -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>GlowGuide</title>
</head>
<style>
    * {
        overflow-x: hidden;
        font-family: 'Montserrat', sans-serif;
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





/* for form */
    :root {
        --gradient-percent: 0%;
    }

    body {
        background: white;
        padding-bottom: 5%;
        background-image: url(images/account_image.jfif);
        height: 100vh;
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .myform {
        background-color: #ddd3d1;
        opacity: 0.8;
        width: 40%;
        height: 580px;
        display: flex;
        font-weight: bold;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin-top: 3%;
        border-radius: 10%;
        border: 5px solid  #6b4f4f;
        box-shadow: 0 4px 8px rgba(0,0,0,1);
    }
    .a {
        width: 90%;
        height: 40px;
        margin-bottom: 5px;
        border-radius: 6px;
    }
    #loginform{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        width: 100%;
    }
    .nav{
        margin-left: 134px;
    }
    .nav a{
        padding: 0px 20px;
        font-weight: bold;
        text-decoration: none;
        color: gray;
    }
    #indicator{
        width: 100px;
        border: none;
        background: #ee9696;
        height: 3px;
        margin-top: 5px;
        margin-left: 19px;
        transform: translateX(100px);
    }
    .button{
        display: block;
        width: 200px;
        margin: 40px auto;
        padding: 10px 20px;
        text-align: center;
        background-color: #6b4f4f;
        color: white;
        text-decoration: none;
        font-size: 1.2em;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    .button:hover{
        background-color:  #ac7a7a;
    }
    
    @media screen and (max-width:900px) {
        .myform{
            width: 80%;
            opacity: 0.9;
        }
    }
    @media screen and (max-width:401px) {
        .myform{
            opacity: 0.9;
        }
        #loginform input{
            width: 77%;
        }
    }
</style>

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




    <?php
        // if($loginalert)
        // {
        //     echo'<p id="showalert" style="background-color : #e4fccc;">You are logged in.</p>';
        // }
        // if($loginerror)
        // {
        //     echo'<p id="showalert" style="background-color : #fb6767;">Incorrect credentials.</p>';
        // }
    ?>
            <div class="myform" style="margin-top: 150px;">        
                <div class="formcontent">
                <h1 style="text-align:center;">WELCOME BACK !</h1>
                <h3 style="text-align:center;">Login below to explore more</h3>
                <form id="loginform" action="login.php" method="post">
                
                    <p style="margin-block-end: 0em; margin-top:60px">Email (ex:john_doe123@xyz.com)</p>
                    <input class="a" for="email" type="email" name="email" 
                    placeholder="john_doe123@xyz.com" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}"  required>


                    <p style="margin-block-end: 0em;">Password</p>
                    <input class="a" for="password" type="password" name="password" placeholder="Enter Password" required>
               
                    <input name="login" class="button" type="submit" value="Login"><br>
                    <p>Don't have an account? <a href="signup.php">Sign up</a></p>
                    <p><a href="products.php">Click here </a> to return to home page.</p>
                </form>
            </div>

    <script>
        ScrollReveal({
                reset:true,
                distance: '60px',
                duration: 2500,
                delay: 300
            });
        ScrollReveal().reveal('.formcontent',{delay:300, distance: '0px',opacity: 0});
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
</html>