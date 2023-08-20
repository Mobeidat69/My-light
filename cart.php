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




<div class="container-cart" style="  background-color: white;
                                         width: 70rem;
                                         margin: 30px auto;
                                         padding: 30px 60px;">

        <div class="content-cart" style="  background: #dae0e065;
                                           display: grid;
                                           
                                           ">

        <h1  style="justify-content: center;
                    display:grid;
                    align-items: center;"> CART </h1>  <br> <br> 

        <table class="table-cart" style=" border: 5px solid #f7444e;   ;">
            <tr>
                <th style=" border: 4px solid #f7444e;">PRODUCTS</th>
                <th style=" border: 4px solid #f7444e;">PRICE</th>
                <th style=" border: 4px solid #f7444e;">QUANTITY</th>
                <th style=" border: 4px solid #f7444e;">SUBTOTAL</th>
            </tr>

            <tr>
                <td style=" border: 4px solid #f7444e;    
                            justify-content: center;
                            text-align: center;">
                    <img src="https://www.ikea.com/jo/en/images/products/brunsta-hemma-pendant-lamp-black__0880536_pe616510_s5.jpg?f=s"  alt="pendant lamp" style=" width: 4rem;
                                                                                                                                                                    height: 4rem;
                                                                                                                                                                    margin-left: -25rem;
                                                                                                                                                                    margin-top: 8px;
                                                                                                                                                                    border-radius: 1rem;">
                    <p style="  margin-top: -3rem;
                                padding-left: 13rem; 
                                font-size: 20px;"> Pendant lamp,black - nickel - plated rectangle</p>
                </td>
                <td style=" border: 4px solid #f7444e;    
                            justify-content: center;
                            text-align: center;"> $50.00</td>
                <td style=" border: 4px solid #f7444e;    
                            justify-content: center;
                             text-align: center;">2</td>
                <td style=" border: 4px solid #f7444e;    
                            justify-content: center;
                            text-align: center;">$100</td>
            </tr>

            <tr>
                <td style=" border: 4px solid #f7444e;    
                            justify-content: center;
                            text-align: center;">
                    <img src="https://www.ikea.com/jo/en/images/products/felsisk-pendant-lamp-with-4-lamps-black__1039892_pe840507_s5.jpg?f=s" class="" alt="pendant lamp"   style=" width: 4rem;
                                                                                                                                                                                    height: 4rem;
                                                                                                                                                                                    margin-left: -25rem;
                                                                                                                                                                                    margin-top: 8px;
                                                                                                                                                                                    border-radius: 1rem;">
                    <p style="  margin-top: -3rem;
                                padding-left: 13rem; 
                                font-size: 20px;"> FELSISK Pendant lamp with 4 lamps - black</p>
                </td>
                <td style=" border: 4px solid #f7444e;    
                            justify-content: center;
                            text-align: center;"> $125</td>
                <td style=" border: 4px solid #f7444e;    
                            justify-content: center;
                            text-align: center;">3</td>
                <td style=" border: 4px solid #f7444e;    
                            justify-content: center;
                            text-align: center;">$375</td>
            </tr>

            <tr>
                <td style=" border: 4px solid #f7444e;    
                            justify-content: center;
                            text-align: center;">
                    <img src="https://ak1.ostkcdn.com/images/products/is/images/direct/af09f93881f01035b942f98a24c93478851b3b07/Bella-LED-Brushed-Iron-and-Rose-Gold-Wall-Lamp.jpg" class="" alt="pendant lamp"  style=" width: 4rem;
                                                                                                                                                                                                                         height: 4rem;
                                                                                                                                                                                                                         margin-left: -25rem;
                                                                                                                                                                                                                         margin-top: 8px;
                                                                                                                                                                                                                         border-radius: 1rem;">
                    <p style="  margin-top: -3rem;
                                padding-left: 13rem; 
                                font-size: 20px;"> Bella LED Brushed Iron and Rose Gold Wall Lamp - 8'' x 10''</p>
                </td>
                <td style=" border: 4px solid #f7444e;    
                            justify-content: center;
                            text-align: center;"> $135</td>
                <td style=" border: 4px solid #f7444e;    
                            justify-content: center;
                            text-align: center;">1</td>
                <td style=" border: 4px solid #f7444e;    
                            justify-content: center;
                            text-align: center;">$135</td>
            </tr>

            <tr>
                <td style="border: none;    
                           justify-content: center;
                           text-align: center;">
                  <button style="background-color: #f7444e;
                                 color: white;
                                 width: 9rem;
                                 height: 3rem;
                                 border-radius: 2rem;
                                 margin-left: 15rem;
                                 border: none;
                                 cursor: pointer;
                                 font-weight: bold;
                                 font-size: 16px;"><a href="#"></a>save change</button> 
                </td>
            </tr>

        </table>

<br> <br> <br>
        
        <div class="total" style=" margin-left: 5rem;">
            <h3>CART TOTAL: $</h3>
                <input type="submit" name="checkout" value="Checkout" class="change" style="background-color: #f7444e;
                                                                                            color: white;
                                                                                            width: 9rem;
                                                                                            height: 3rem;
                                                                                            border-radius: 2rem;
                                                                                            border: none;
                                                                                            cursor: pointer;
                                                                                            font-weight: bold;
                                                                                            font-size: 16px;"
                                                                                            >
                                                                                          
        </div>
        <br> <br> <br>

      
        </body>
        </div>
</div>


<?php

include("footer.php") ;

?>
