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





<div class="container-view" style="background-color: white;
                                       width: 65rem;
                                       margin: 30px auto;
                                       padding: 30px 60px;">

        <div class="content-view" style="background: #dae0e065;
                                         display: grid;
                                         ">
        <!-- <h1> VIEW  PRODUCT </h1>  -->
         <br> <br> 

        <img src="https://ak1.ostkcdn.com/images/products/is/images/direct/af09f93881f01035b942f98a24c93478851b3b07/Bella-LED-Brushed-Iron-and-Rose-Gold-Wall-Lamp.jpg" class="" alt="pendant lamp" style=" width: 25rem;
                                                                                                                                                                                                            height: 35rem;
                                                                                                                                                                                                            margin-left: 3rem;">

        <div class="text" style="margin-left: 35rem;
                                 margin-top: -35rem;
                                 font-size: xx-large;">
        <h2 style="color: #f7444e;"> Wall Lamp  </h2>
        <p style="text-decoration: line-through;"> $135 </p>
        <h3 style="color: #f7444e;"> $100 </h3>
        <p>Bella LED Brushed Iron and Rose Gold Wall Lamp - 8'' x 10''</p>
        <button style="background-color: #f7444e;
                       width: 10rem;
                       height: 4rem;
                       border-radius: 2rem;
                       border: none;
                       font-size: 18px;
                       color: white;
                       cursor: pointer;
                       font-weight: bold;"><a href="./cart.html"></a> Add to cart </button> 
        </div>

        <br> <br>
        <hr>
        

       <h1>Reviews</h1>
       <div class="Reviews" style="margin-left: 2rem; 
                                   border: 1px solid black;
                                   width: 60rem;
                                   height: 25rem;
                                   padding-left: 2rem;
                                   margin-bottom: 3rem;">
        <h2 style="color: #f7444e;">Add your review</h2>
            <form>
            <textarea name="comment" placeholder="ENTER YOUR COMMENT" style=" width: 40rem;
                                                                              height: 10rem;"> </textarea> <br> <br>
            <input type="submit" style="background-color: #f7444e;
                                        width: 10rem;
                                        height: 4rem;
                                        border: none;
                                        border-radius: 2rem;
                                        font-size: 18px;
                                        color: white;
                                        cursor: pointer;
                                        font-weight: bold;"> 
            <form>
    </div>
  
    </div>
    </div>



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
