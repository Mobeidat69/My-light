<?php
include("connect.php");

include("nav.php");
$cat_id = $_GET['cat_id'];
echo $cat_id;
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






    <?php

    include("footer.php");

    ?>