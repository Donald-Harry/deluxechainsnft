<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome | <?=$_SESSION['reg_fname'];?> <?=$_SESSION['reg_lname'];?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="access/vendor/bootstrap/css/bootstrap.min.css">


  <link rel="stylesheet" type="text/css" href="access/fonts/iconic/css/material-design-iconic-font.min.css">

  <link rel="stylesheet" type="text/css" href="access/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="icofont/icofont.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="icofont/icofont.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="access/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="access/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="access/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="access/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="access/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="access/css/util.css">
  <link rel="stylesheet" type="text/css" href="access/css/main.css">
<!--===============================================================================================-->
</head>
<body style=" background: #192132; ">
  <style>
  @keyframes shake {
    0%, 100% {
      transform: translateX(0);
    }
    10%, 30%, 50%, 70%, 90% {
      transform: translateX(-10px);
    }
    20%, 40%, 60%, 80% {
      transform: translateX(10px);
    }
  }

  .login-button {
    display: flex;
    justify-content: center;
    align-items: center;
    animation: shake 20s ease-in-out infinite;
  }

  .login-button a {
      border-radius:10px;
      margin: 20px;
    color: #fff;
    text-decoration: none;
    padding: 9px 20px;
    background: green;
  }
</style>
  <div class="limiter">
    <div  class="container-login100">
<div style="display: flex; justify-content: center; align-items: center; margin-top: 20px;">
  <a href="https://deluxeartsnft.online/">
    <img style="width: 100px;" src="../images/logo.png" alt="logo">
  </a>
</div>

      <div style=" background: #202c41; " class="wrap-login100" style="border: 1px solid #999; ">
        <form class="login100-form validate-form">

          <div align="center" style="margin-bottom: 34px;">
          </div>

              <div  align="center" style="margin: 12% 0% 5% 0%; border-radius: 20px; color: white; padding: 30px 5px;" >
                       
                        <p>Welcome, <b><?php echo $_SESSION['reg_fname']; ?> <?php echo $_SESSION['reg_lname']; ?></b></p>
                          <p>Your account registration has been sucessfully completed, Please check your</p>
                        <div align="center">
                        <p>email: <span style="color: skyblue; font-size: 17px"> <?php echo $_SESSION['reg_email']; ?> </span>for a welcome mail </p>
                        </div>
              </div>

          <div class="login-button">
    <a class="txt1" href="enter/login.php">Login Here</a>
  </div>
        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>
</html>