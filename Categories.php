<?php
include("connect.php"); 

session_start();

?>
<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/half-logo.png" type="">
      <title> Mylight</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <!-- Css styles for login -->
      <link href="css/login.css" rel="stylesheet" />
      <!-- Css styles for register -->
      <link href="css/register.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />
      <script src="https://kit.fontawesome.com/d9f213cfa1.js" crossorigin="anonymous"></script>
   </head>
   <body>





<?php

include("nav.php");
$cat_id = $_GET['cat_id'];
// echo $cat_id;
?>


<section class="product_section layout_padding">


    <?php
    $query = "SELECT * FROM products INNER JOIN categories WHERE products.category_id = categories.category_id AND products.category_id =$cat_id ;";
    $result = mysqli_query($conn, $query);
    $resultcheck = mysqli_num_rows($result);
    $query1 = "SELECT category_name FROM categories WHERE category_id=$cat_id;";
    $result1 = mysqli_query($conn, $query1);
    $cat_name = mysqli_fetch_assoc($result1);
    echo '<div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
               <h3>'.$cat_name['category_name'].'</h3>
            </div>

            <div class="row">';
    if ($resultcheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row["sale_status"] == 1) {
                $pbs = floor(($row['price']) / ((100 - $row['sale_pre']) / 100)); //// price after sale 
                echo '
                    <div class="col-sm-6 col-md-3 col-lg-3">
                         <div class="box">
                             <div class="option_container">
                                   <div class="options">
                             <a href="cart.php" class="option1">
                                               Add To Cart
                                               </a>
                                  <a href="viewproduct.php" class="option2">
                                              View Product
                                             </a>

                                            </div>
                                       </div>
                                        <div class="img-box">
                                       <img src=" ' . $row["image"] . '" alt="">
                                      </div>
                                      <div class="detail-box">
                               <h5>
                               ' . $row["name"] . '
                                                 </h5>
                                               </div>
                                           <h6 class="sale">
                                       <del> <strong> ' . $row["price"] . ' </strong> </del>
                                      <br>
                                           <ins> <strong> '  .  $pbs . ' </strong> </ins>
                                            </h6>
                                              </div>
                                             </div>
                        
                        ';
            } else {


                echo '
                          <div class="col-sm-6 col-md-3 col-lg-3">
               <div class="box">
                  <div class="option_container">
                     <div class="options">
                        <a href="cart.php" class="option1">
                        Add To Cart
                        </a>
                        <a href="viewproduct.php" class="option2">
                        View Product
                        </a>
                     </div>
                  </div>
                  <div class="img-box">
                     <img src="' . $row["image"] . '" alt="">
                  </div>
                  <div class="detail-box">
                     <h5>
                     ' . $row["name"] . '
                     </h5>
                  </div>
                  <h6 class="price">
                      <strong>' . $row["price"] . '  </strong> 
                       </h6>
               </div>
            </div>
                          
                          
                          
                          ';
            }
        }
    }
    echo "</div>";

    ?>
</section>
</div>
</div>





    <?php

    include("footer.php");

    ?>

    <!-- footer section -->
      <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
   </body>
</html>