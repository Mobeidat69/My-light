<?php
session_start();

include("connect.php"); 

if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mobile = $_POST['mobile'];
    $dobDay = $_POST['dob-day'];
    $dobMonth = $_POST['dob-month'];
    $dobYear = $_POST['dob-year'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $Confirm = $_POST['re_pass'];
    $date = "$dobYear-$dobMonth-$dobDay";

    



    $letters = "/^(?=.{1,50}$)[a-z]+(?:['_.\s][a-z]+)*$/i";

    if (preg_match($letters, $fname)   && preg_match($letters, $lname)) {
        $checkFN = true;
    } else {
        $checkFN = false;
        $b = '<style type="text/css">
        #i1, #one {
            display: inline;
        }
        </style>';
    }



    $number = "/^\\(?([0-9]{3})\\)?[-.\\s]?([0-9]{3})[-.\\s]?([0-9]{4})?[-.\\s]?([0-9]{4})$/";
    if (strlen($mobile) <= 14 &&strlen($mobile) >= 10) {
        $checkMobile = true;
    } else {
        $c = '<style type="text/css">
        #i5, #five {
            display: inline;
        }
        </style>';
        $checkMobile = false;
    }



    if ((floor((time() - strtotime($date)) / 31556926)) > 16) {
        $checkdate = true;
    } else {
        $d = '<style type="text/css">
        #i6, #six {
            display: inline;
        }
        </style>';
        $checkdate = false;
    }


    $filter2 = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/";

    $sql="SELECT email FROM user;";
    $run= mysqli_query($conn,$sql);
    $resultcheck = mysqli_num_rows($run);
    if($resultcheck > 0)
    {
    while($row = mysqli_fetch_assoc($run)){
        if($row['email']== $email){
            $e = '<style type="text/css">
            #i7, #seven1 {
                display: inline;
            }
            </style>';
            $checkEmaile = false;

        }
    }
}

   

     if (preg_match($filter2, $email)) {
        $checkEmaile = true;
    } else {
        $e = '<style type="text/css">
        #i7, #seven {
            display: inline;
        }
        </style>';
        $checkEmaile = false;
    }

    $regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=(.*[\d]){2,})[A-Za-z\d?]{8,32}$/";
    $num = "/[\d]{2,}/";
    $capital = "/[A-Z]/";
    $symboles = "/[#$@!%&*?]/";
    if (preg_match($regex, $pass)) { //To check from 2 passwords syntax

        $f = '<style type="text/css">
    #i8, #eight {
        display: inline;
    }
    </style>';
        $checkpass = false;
    } else if (!preg_match($capital, $pass)) { //To check from the first letter
        $f = '<style type="text/css">
        #i8, #eight2{
            display: inline;
        }
        </style>';

        $checkpass = false;
    } else if (!preg_match($num, $pass)) {

        $f = '<style type="text/css">
        #i8, #eight3{
            display: inline;
        }
        </style>';

        $checkpass = false;
    } else if (!preg_match($symboles, $pass)) {

        $f = '<style type="text/css">
        #i8, #eight4{
            display: inline;
        }
        </style>';

        $checkpass = false;
    } else if (strlen($pass) < 8) {

        $f = '<style type="text/css">
        #i8, #eight6{
            display: inline;
        }
        </style>';

        $checkpass = false;
    } else if (strpos($pass, ' ')) {

        $f = '<style type="text/css">
        #i8, #eight5{
            display: inline;
        }
        </style>';

        $checkpass = false;
    } else {
        $checkpass = true;
    }

    if ($pass != $Confirm) {
        $g = '<style type="text/css">
        #i9, #nine{
            display: inline;
        }
        </style>';

        $checkco = false;
    } else {
        $checkco = true;
    }

    if ($checkFN && $checkMobile && $checkEmaile && $checkdate && $checkpass && $checkco) {

        $reg = '<style type="text/css">
  #reg, .pop{
      display: block;
  }
  </style>';

  $passHash = password_hash($pass, PASSWORD_DEFAULT);
  $sql = "INSERT INTO user (first_name, last_name, email,pass,mobile,datee ) 
VALUES ('$fname', '$lname', '$email', '$passHash', '$mobile','$date')";


        if (mysqli_query($conn, $sql)) {
            echo '';
        } else {
            echo "error:" . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);

        echo "<script language='javascript'>
setTimeout(() => {
    window.location.href = 'login.php'; 
 }, 3000);
</script>";
    }


    if(!empty($email)) $x1= $email;
    if(!empty($mobile)) $x2= $mobile;
    if(!empty($fname)) $x3= $fname;
    if(!empty($lname)) $x33= $lname;
    if(!empty($date)) $x4= $date;


}




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
      
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />
      <script src="https://kit.fontawesome.com/d9f213cfa1.js" crossorigin="anonymous"></script>
   </head>
   <body>


<?php

include("nav.php") ;

?>
<section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Register</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>




<div class="main">
    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="row" style="padding-top: 75px;">
                <div class="col-8">
                    
                    <form method="POST" class="register-form" id="register-form">
                    
                            <label for="first-name"> First Name<i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="fname" id="first-name" placeholder="First Name" required/>
                        
                            <label for="last-name"> Last Name<i class="zmdi zmdi-account"></i></label>
                            <input type="text" name="lname" id="last-name" placeholder="Last Name" required/>
                        
                            <label for="email"> Email<i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Your Email" required/>
                       
                            <label for="mobile">Mobile<i class="zmdi zmdi-phone"></i></label>
                            <input type="tel" name="mobile" id="mobile" placeholder="Your Mobile" required pattern="[0-9]{14}"/>
                       
                            <label for="pass">Password<i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="pass" id="pass" placeholder="Password" required/>
                        
                       
                            <label for="re_pass">Confirm Password<i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" required/>
                        
                        <input type="submit" name="submit" id="signup" class="form-submit" value="Register"/>
                        
                    </form>
                    <br>
                    <br>
                </div>
                <div class="col-4">
                    <figure><img src="images/signup-image.jpg" alt="sign up image"></figure>
                </div>
            </div>
        </div>
    </section>
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

      <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    
   </body>
</html>