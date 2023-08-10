<?php
include "includes/common.php";

if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<!--

-->
<html>
    <head>
               
        <meta charset="UTF-8">
        <title>VCart| Products</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="Jquery/Jquery30.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css"/>
        <script type="text/javascript">
        $(document).ready(function() {
            $(".add-to-cart").click(function(e) {
                e.preventDefault();
                var item_id = $(this).data("itemid");
                var button = $(this);

                $.ajax({
                    url: "cart-add-ajax.php",
                    type: "GET",
                    data: { id: item_id },
                    success: function(response) {
                        if (response === "success") {
                            button.text("Added to cart").addClass("btn-success").prop("disabled", true);
                        } else if (response === "not_logged_in") {
                            alert("Please log in to add items to the cart.");
                        } else {
                            alert("Failed to add item to cart. Please try again.");
                        }
                    }
                });
            });
        });
    </script>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        
        <br><br><br><br><br>
        <div class="container">
            
            <div class="jumbotron">
                <h1 style="text-align: center; color:orange" >Welcome to our VCart Store!</h1>
                <p style="text-align: center; color:orange">We have the best cameras,watches,shirts and shoes for you. 4 Products One Place.</p>
                
            </div>
             
        </div>
        
                
                 <div class="container">
              <div class="row text-center">
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/5.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Cannon EOS</h3>
                              <p>Price:Rs.36000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(1)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                             <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/2.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Sony DSLR</h3>
                              <p>Price:Rs.40000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(2)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/3.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Sony DSLR</h3>
                              <p>Price:Rs.50000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(3)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/4.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Olympus DSLR</h3>
                              <p>Price:Rs.80000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(4)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/9.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Titan Model#301</h3>
                              <p>Price:Rs.13000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(5)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/10.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Titan Model#201</h3>
                              <p>Price:Rs.3000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(6)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/11.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>HMT Milan</h3>
                              <p>Price:Rs.8000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(7)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                             <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/12.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Faber Luba#111</h3>
                              <p>Price:Rs.18000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(8)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/8.jpg" alt="Responsive image" id="imgs">
                          <div class="caption">
                              <h3>H&W</h3>
                              <p>Price:Rs.800.00</p>
                              <?php 
					
					if (check_if_added_to_cart(9)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                             <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/6.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>luis Phil</h3>
                              <p>Price:Rs.1000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(10)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/13.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>John Zok</h3>
                              <p>Price:Rs.1500.00</p>
                              <?php 
					
					if (check_if_added_to_cart(11)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/14.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Jhalsani</h3>
                              <p>Price:Rs.1300.00</p>
                              <?php 
					
					if (check_if_added_to_cart(12)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                      
                      
                      
                  </div>

                  <div class="col-md-3 col-sm-6">
    <div class="thumbnail">
        <img src="img/white-vintage.jpg" alt="Responsive image">
        <div class="caption">
            <h3>Liberty</h3>
            <p>Price: Rs.1104.00</p>
            <?php 
                if (check_if_added_to_cart(13)) { 
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                } else {
            ?>
            <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
            <?php
                }
            ?>
        </div>
    </div>
</div>








<div class="col-md-3 col-sm-6">
    <div class="thumbnail">
        <img src="img/sport-shoe.jpg" alt="Responsive image">
        <div class="caption">
            <h3>Mochi</h3>
            <p>Price: Rs.2094.00</p>
            <?php 
                if (check_if_added_to_cart(14)) { 
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                } else {
            ?>
            <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
            <?php
                }
            ?>
        </div>
    </div>
</div>






<div class="col-md-3 col-sm-6">
    <div class="thumbnail">
        <img src="img/brown-Shoes.jpg" alt="Responsive image">
        <div class="caption">
            <h3>Lee Cooper </h3>
            <p>Price: Rs.3599.00</p>
            <?php 
                if (check_if_added_to_cart(15)) { 
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                } else {
            ?>
            <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
            <?php
                }
            ?>
        </div>
    </div>
</div>





<div class="col-md-3 col-sm-6" style="translate:0px -336px;">
    <div class="thumbnail">
        <img src="img/men-shoes.jpg" alt="Responsive image">
        <div class="caption">
            <h3>Woodland </h3>
            <p>Price: Rs.4995.00</p>
            <?php 
                if (check_if_added_to_cart(16)) { 
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                } else {
            ?>
            <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
            <?php
                }
            ?>
        </div>
    </div>
</div>
            </div>                  
              </div>
            <!-- </div> -->
          </div>
          <footer class="fo">
           <div class="container">
               <center>
                   <p>Copyright <small>&copy;</small> VCart Store | All Rights Reserved</p>
               </center>
           </div>
           
           
       </footer>
        
        
    </body>
</html>
