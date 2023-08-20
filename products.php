<?php
include("connect.php"); 



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

include("nav.php") ;
?>

  <!-- inner page section -->
  <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Product Grid</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->







      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>

            <div class="row">

            <?php   
            $query = "SELECT * FROM products INNER JOIN categories WHERE products.category_id = categories.category_id ;";
            $result = mysqli_query($conn, $query);
            $resultcheck = mysqli_num_rows($result);
            if ($resultcheck > 0) {

               while ($row = mysqli_fetch_assoc($result)) {
                  $x = $row['id'];
                  if ($row["sale_status"] == 1) {
                     $pbs = ($row['price']) * ((100 - $row['sale_pre']) / 100);
                     //// price after sale 

                     echo '
                    <div class="col-sm-6 col-md-3 col-lg-3">
                         <div class="box">
                             <div class="option_container">
                                   <div class="options">
                             <a href="cart.php?view_id=' . $row['id'] . ' " class="option1">
                                               Add To Cart
                                               </a>
                                  <a href="viewproduct.php?view_id=' . $row["id"] . ' " class="option2">
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
                                       <del> <strong> ' . floor($row["price"]) . '  JD' . ' </strong> </del>
                                      <br>
                                           <ins> <strong> '  .  $pbs . '  JD' . ' </strong> </ins>
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
                     <a href="cart.php?view_id=' . $row['id'] . ' " class="option1">
                     Add To Cart
                     </a>
                        <a href="viewproduct.php?view_id=' . $row["id"] . ' " class="option2">
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
                      <strong>' . floor($row["price"]) . '  JD' . '  </strong> 
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







            <!-- <div class="row">


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
         <img src="Images/ProductsImages/1.png" alt="">
      </div>
      <div class="detail-box">
         <h5>
         Pendant lamp shade, smoked, 30 cm
         </h5>
      </div>
         <h6 class="sale">
           <del> <strong> 25 JD</strong> </del>
           <br>
          <ins> <strong> 20 JD</strong> </ins>
         </h6>
   </div>
</div>


<div class="col-sm-6 col-md-3  col-lg-3">
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
         <img src="images/ProductsImages/6.png" alt="">
      </div>
      <div class="detail-box">
         <h5>
         Pendant lamp, black, 20 cm
         </h5>
      </div>
      <h6 class="sale">
           <del> <strong> 16 JD</strong> </del>
           <br>
          <ins> <strong> 16 JD</strong> </ins>
         </h6>
   </div>
</div>


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
         <img src="images/productsImages/8.png" alt="">
      </div>
      <div class="detail-box">
         <h5>
         Pendant lamp with 4 lamps, black
         </h5>
      </div>
      <h6 class="sale">
           <del> <strong> 139 JD</strong> </del>
           <br>
          <ins> <strong> 139 JD</strong> </ins>
         </h6>
   </div>
</div>


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
         <img src="images/productsImages/17.png" alt="">
      </div>
      <div class="detail-box">
         <h5>
         LED lighting strip, multicolour, 1 m
         </h5>
      </div>
      <h6 class="sale">
           <del> <strong> 7 JD</strong> </del>
           <br>
          <ins> <strong> 7 JD</strong> </ins>
         </h6>
   </div>
</div>



</div>








<div class="row">

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
                     <img src="images/productsImages/2.png" alt="">
                  </div>
                  <div class="detail-box">
                     <h5>
                     Pendant lamp, black/nickel-plated rectangle
                     </h5>
                  </div>
                  <h6 class="price">
                      <strong> 104 JD</strong> 
                       </h6>
               </div>
            </div>



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
                     <img src="images/productsImages/3.png" alt="">
                  </div>
                  <div class="detail-box">
                     <h5>
                     Pendant lamp, rattan/black
                     </h5>
                  </div>
                  <h6 class="price">
                      <strong> 59 JD</strong> 
                       </h6>
               </div>
            </div>
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
                     <img src="images/productsImages/2.png" alt="">
                  </div>
                  <div class="detail-box">
                     <h5>
                     Pendant lamp, black/nickel-plated rectangle
                     </h5>
                  </div>
                  <h6 class="price">
                      <strong> 104 JD</strong> 
                       </h6>
               </div>
            </div>



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
                     <img src="images/productsImages/3.png" alt="">
                  </div>
                  <div class="detail-box">
                     <h5>
                     Pendant lamp, rattan/black
                     </h5>
                  </div>
                  <h6 class="price">
                      <strong> 59 JD</strong> 
                       </h6>
               </div>
            </div>





            </div>











         </div>
      </section> -->




      <!-- end product section -->







<?php

include("footer.php") ;

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
