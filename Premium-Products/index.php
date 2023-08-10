<?php
require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<!--

-->
<html>

<head>


    <meta charset="UTF-8">
    <title>Vcart Store</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    
    </script>
</head>

<body>
    <?php
    include 'includes/header.php';
    ?>
    <div id="banner-image">
        <div class="container">
            <center>
                <div id="banner_content">
                    <h1><b>We sell Perfect.</b></h1>
                    <p><b>Flat 40% OFF on premium brands.</b></p>
                    <a href="products.php" target="_self"> <button class=" btn btn-danger btn-lg active" ><b>Shop Now</b> </button></a>

                </div>
            </center>
        </div>

    </div><br><br>



    <div class="container-fluid">
    <div class="row text-center">
        <div class="col-md-8 col-md-offset-2">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <!-- Add more indicators if needed -->
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <a href="#">
                            <img src="img/7.jpg" alt="Watches">
                            <div class="carousel-caption">
                                <h2>Watches</h2>
                                <p>Original watches from the best brand.</p>
                            </div>
                        </a>
                    </div>

                    <div class="item">
                        <a href="#">
                            <img src="img/1.jpg" alt="Cameras">
                            <div class="carousel-caption">
                                <h2>Cameras</h2>
                                <p>Choose among the best available in the world.</p>
                            </div>
                        </a>
                    </div>

                    <div class="item">
                        <a href="#">
                            <img src="img/8.jpg" alt="Shirts">
                            <div class="carousel-caption">
                                <h2>Shirts</h2>
                                <p>Our exquisite collection of shirts.</p>
                            </div>
                        </a>
                    </div>

                    <div class="item">
                        <a href="#">
                            <img src="img/sport-shoe.jpg" alt="Shoes">
                            <div class="carousel-caption">
                                <h2>Shirts</h2>
                                <p>Our exquisite collection of shoes.</p>
                            </div>
                        </a>
                    </div>

                    <!-- Add more carousel items if needed -->
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>




    <footer class="fo">
        <div class="container">
            <center>
                <p>Copyright <small>&copy;</small> Vcart Store | All Rights Reserved</p>
            </center>
        </div>


    </footer>

    <!-- <script>
         document.addEventListener('click', function () {
            var shopNowButton = document.getElementById('shopNowButton');
            shopNowButton.addEventListener('click', function () {
                alert('Please sign up first before shopping.');
            });
        });
    </script> -->
        
</body>

</html>