<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Glow Guide</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="cep .css">
    <style>
        /* body {
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f5f2;
            color: #333;
        } */
        
/* for navbar section */
        *{
            margin: 0;
            scroll-behavior: smooth;
            font-family: "Poppins", sans-serif;
        }

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
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
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
                            <a class="nav-link nav-products-link dropdown-toggle" href="#" role="button"
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
                            <a class="nav-link nav-account-link dropdown-toggle" style="margin-top: 6px; padding: 13px;"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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


    <header>
        <div class="about-header">
            <h1 style="font: weight 1500px; font-size:50px; margin-top: 96px;">About Us</h1>
            <h6>"Welcome to Glow Guide, where beauty reflects conscience and ethics. Our premium cosmetics embody
                values, liberated from the shadows of conflict. Embrace a journey of beauty and peace with every
                product."</h6>
            <p>Discover what makes us unique.</p>
        </div>
    </header>
    <div class="about-container">
        <section class="mission">
            <h2 class="about-headings">Our Mission</h2>
            <div class="about-content">
                <img src="images/mission.jpeg" alt="Mission Image">
                <div>
                    <p style="text-align: justify;">At <i>Glow Guide</i>, our mission is to provide a comprehensive
                        platform that helps conscientious consumers make informed choices about the products they
                        purchase. We aim to facilitate the boycott of Israeli products by offering an extensive
                        collection of brands and items from around the world that are not involved in supporting the
                        actions of Israel. We believe in empowering individuals to take a stand against genocide and
                        injustice through their purchasing decisions. By choosing to support brands that align with
                        these ethical principles, we can collectively drive change and promote a more just and equitable
                        world.</p>
                </div>
            </div>
        </section>
        <section class="team">
            <h2 class="about-headings">Our Team</h2>
            <div class="about-content">
                <div>
                    <p style="text-align: justify;">Out team at <i>Glow Guide</i>, is comprised of dedicated individuals
                        who are passionate about social justice and ethical consumerism. We come from diverse
                        backgrounds, united by a shared commitment to making it easier for people to find and support
                        brands that do not contribute to the ongoing conflict in Israel. Each member of our team brings
                        unique skills and perspectives to the table, ensuring that our platform is as informative,
                        user-friendly, and comprehensive as possible. We work tirelessly to research and verify the
                        brands featured on our website, so you can trust that your choices are making a positive impact.
                    </p>
                </div>
                <img src="images/team.jpeg" alt="Team Image">
            </div>
        </section>
        <section class="values">
            <h2 class="about-headings">Our Values</h2>
            <div class="about-content">
                <img src="images/values.jpeg" alt="Values Image">
                <div>
                    <p style="text-align: justify;">Our values guide everything we do. We are dedicated to ethical
                        consumerism, believing that consumer choices can drive social and political change. By offering
                        information on non-Israeli products, we help people make purchases that reflect their values.
                        We value transparency and ensure our brand selection is based on thorough research to avoid
                        supporting Israeli actions. We stand in solidarity with those affected by injustice and use our
                        platform to support ethical brands and promote peace and justice. Inclusivity is key to us, and
                        we strive to create a space where everyone can find and share information about ethical
                        products. By living these values, we aim to inform, inspire, and empower people to make a
                        difference through their everyday choices.

                    </p>
                </div>
            </div>
        </section>
        <a href="products.php" class="back-to-home">Back to Home</a>
    </div>
    <!-- <footer>
        <p>&copy; 2024 Glow Guide. All rights reserved.</p>
    </footer> -->
     <!-- for footer section -->
 <footer>
    <!-- <div class="footercontainer">
        <div class="socialicons">
            <a href=""><i class="fa fa-facebook-square" style="font-size:36px"></i></a>
            <a href=""><i class="fa fa-instagram" style="font-size:36px"></i></a>
        </div>
    </div> -->
    <div class="footernav">
     <div class="footernavlist">
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