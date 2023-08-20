<?php
require 'connect.php';
session_start();
// $id= $_SESSION["user_id"];
$id = 1;
$e = 0;
$arr_q = [];
if (isset($_GET['pro_id'])) {
    $pro_id = $_GET['pro_id'];
}
if (isset( $_SESSION['user_id'])) {
    $id =  $_SESSION['user_id'];
}

$query = "SELECT * FROM products INNER JOIN categories ON products.category_id = categories.category_id WHERE products.id='$pro_id';";
$r = mysqli_query($conn, $query);
$s = mysqli_num_rows($r);

if (isset($_POST['checkout'])) {
    header("location:checkout.php");
}

$homepath = '../landingpage.php?id=' . $id;
$shoppath = '../ProductsPage.php?id=' . $id;
$categorypath = '../CategoriesPage.php?id=' . $id . '&';
$cartpath = '#';
$about = '../aboutUS.php?id=' . $id;
$contact = '../contactUS.php?id=' . $id;

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

    ?>




    <div class="container-cart" style="  background-color: white;
                                         width: 70rem;
                                         margin: 30px auto;
                                         padding: 30px 60px;">

        <div class="content-cart" style="  background: #dae0e065;
                                           display: grid;
                                           
                                           ">

            <h1 style="justify-content: center;
                    display:grid;
                    align-items: center;"> CART </h1> <br> <br>
        <?php

?>
            <table class="table-cart" style="border: 2px solid #f7444e;">
                <tr>
                <th style="border: 2px solid #f7444e;">img</th>
                    <th style="border: 2px solid #f7444e;">PRODUCTS</th>
                    <th style="border: 2px solid #f7444e;">PRICE</th>
                    <th style="border: 2px solid #f7444e;">QUANTITY</th>
                    <th style="border: 2px solid #f7444e;">SUBTOTAL</th>
                </tr>

                <?php
                
                $sum = 0;
                if ($s > 0) {
                    while ($row = mysqli_fetch_assoc($r)) {
                       
                        echo '<tr>
                        <td style="position: relative;">
                         <div style="left: 0; margin: auto; display: flex; justify-content: space-around; align-items: center; width: 200px;">
                            <img src="'.$row['image'].'" width="50px" alt="">
                        </div>
                       </td>
                <td style="border: 2px solid #f7444e;">' . $row['name'] . '</td>
                <td style="border: 2px solid #f7444e;">$' . $row['price'] . '</td>
                <td>
                    <input type="hidden" value="' . $row['id'] . '" name="product_id' . $row['id'] . '">
                    <input type="number" class="num" min="1" value="' . '" name="quan' . $row['id'] . '" id="">
                </td>
                <td style="border: 2px solid #f7444e;">$' . ($row['price'] ) . '</td>
            </tr>';

                        // Calculate the total
                        $sum += ($row['price'] );
                    }
                } else {
                    echo '<tr><td colspan="4">No products found</td></tr>';
                }
                $_SESSION["total"] = $sum;
                ?>

            </table>

        



            <br> <br> <br>

            <div class="total" style="margin-left: 5rem;">
                <h3>CART TOTAL: $<?php echo $sum; ?></h3>
                <input type="submit" name="checkout" value="Checkout" class="change" style="background-color: #f7444e;
                                                                                color: white;
                                                                                width: 9rem;
                                                                                height: 3rem;
                                                                                border-radius: 2rem;
                                                                                border: none;
                                                                                cursor: pointer;
                                                                                font-weight: bold;
                                                                                font-size: 16px;">
            </div>

            <br> <br> <br>


</body>
</div>
</div>


<?php

include("footer.php");

?>