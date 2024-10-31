<?php
include 'connection.php';
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
    <link rel="stylesheet" type="text/css" href="products.css" />

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

    <!-- for skincare section -->
    <div class="pt-5 makeup-page" style="margin-top: 96px;">
        <h1 style="color: #6b4f4f; font-weight: bolder; margin-left: 100px;">SHOP FOR SKINCARE</h1>
        <div class="topcards p-4">
            <?php
            $query = 'SELECT * FROM product WHERE category_id=2';
            $query_result = mysqli_query($conn, $query);
            // query ko execute karaye ga 

            // sab kuch result main jo aya hai usse array ki form main store karaye ga
            // echo 'executed';
            while ($row = mysqli_fetch_array($query_result)) {
            ?>
                <div class="card col-lg-3 col-md-6 col-sm-12">
                    <form action="individual_product.php" method="get">
                    <input type="hidden" name="product_idddd" value="<?php echo $row['product_id'] ?>">

                        <img src="<?php echo $row['picture'] ?>" class="card-img-top" alt="..." height="400">
                        <div class="card-body">
                            <h5 class="card-title mb-0" style="color: #6b4f4f; font-weight: bold; height:80px"><?php echo $row['product_name'] ?></h5>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            <div class="productmore-btn">
                                <a href="<?php echo $row['link'] ?>" class="more-button1" id="redirectButton">Buy Now</a>
                                <!-- <a href="#" class="more-button2" id="redirectButton">Learn more</a> -->
                                <input type="submit" value="Learn more" class="more-button2">

                            </div>
                        </div>
                    </form>
                </div>
            <?php

            }

            ?>

        </div>
        
    </div>



    <!-- for footer section -->
<footer>
    <!-- <div class="footercontainer">
        <div class="socialicons">
            <a href=""><i class="fa fa-facebook-square" style="font-size:36px"></i></a>
            <a href=""><i class="fa fa-instagram" style="font-size:36px"></i></a>
        </div>
    </div> -->
    <div class="footernav">
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