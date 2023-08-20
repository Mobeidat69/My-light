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

   include("nav.php");
   $view_id = $_GET['view_id'];
   echo $view_id;
   ?>


<section class="product_section layout_padding">


   
<?php
$query = "SELECT * FROM products INNER JOIN categories WHERE products.category_id = categories.category_id AND products.id =$view_id ;";
$result = mysqli_query($conn, $query);
$resultcheck = mysqli_num_rows($result);
if ($resultcheck > 0) {

 $row = mysqli_fetch_assoc($result) ;
 echo '
             <div class="container">
             <div class="heading_container heading_center">
                <h2>
                   Product Details
                </h2>
             </div>
             <div class="row">
    
                <div class="col-sm-11 col-md-11 col-lg-11">
                   <div class="box">
                      <div class="option_container">
                         <div class="options">
                            <a href="cart.php" class="option1">
                               Add To Cart
                            </a>
    
    
                         </div>
                      </div>
                      <div class="row">
                         <div class="col-6">
                            <div class="img-box">
                               <img src="Images/ProductsImages/'.$row["id"].'.png" alt="">
                            </div>
                         </div>
                         <div class="col-5" style="padding-top: 10px;padding-left:60px;">
                            <div class="eedite">
                               <div class="detail-box">
                                  <h4 style="font-weight: 700; color:#f7444e">
                                  '.$row["name"].'
                                  </h4>
                               </div>
                               <div class="detail-box">
                                  <h5 style="font-weight: 500;">
                                  '.$row["description"].'
                                  </h5>
                               </div>
                            </div>
                         </div>
                         <div class="col-1" style="padding-top: 60px;">
                            <h6 class="sale">' ;
                            if ( $row["sale_status"] == 1 ) {
                              $pbs = ($row['price']) * ((100 - $row['sale_pre']) / 100);
                              

                            echo '
                               <del> <strong> '.$row["price"].'  JD'.'</strong> </del>
                               <br>
                               <ins> <strong> '.$pbs.'  JD'.'</strong> </ins>
                               <br>' ;
                            }

                                else {
                                 echo '
                                  <strong> '.$row["price"].'  JD'.'</strong> ' ;
                                }

                               echo '
                            </h6>
                         </div>
                      </div>
    
    
    
                   </div>
                </div>
    
    
    
    
             </div>
    
    
    
    
    
    
          </div>
             
             
             ';
         }

 
  

echo "</section>" ;

?>





<!-- <section class="product_section layout_padding">
      <div class="container">
         <div class="heading_container heading_center">
            <h2>
               Product Details
            </h2>
         </div>
         <div class="row">

            <div class="col-sm-11 col-md-11 col-lg-11">
               <div class="box">
                  <div class="option_container">
                     <div class="options">
                        <a href="cart.php" class="option1">
                           Add To Cart
                        </a>


                     </div>
                  </div>
                  <div class="row">
                     <div class="col-6">
                        <div class="img-box">
                           <img src="Images/ProductsImages/1.png" alt="">
                        </div>
                     </div>
                     <div class="col-4" style="padding-top: 10px;">
                        <div class="eedite">
                           <div class="detail-box">
                              <h4 style="font-weight: bold; color:#f7444e">
                                 the naame
                              </h4>
                           </div>
                           <div class="detail-box">
                              <h5 style="font-weight: 500;">
                                 dddescription
                              </h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-2" style="padding-top: 60px;">
                        <h6 class="sale">
                           <del> <strong> 25 JD</strong> </del>
                           <br>
                           <ins> <strong> 20 JD</strong> </ins>
                        </h6>
                     </div>
                  </div>



               </div>
            </div>




         </div>






      </div>
   </section> -->




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