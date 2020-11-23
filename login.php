<!DOCTYPE html>
<html>

<head>
  <title>asset management</title>
  <link rel="stylesheet" type="text/css" href="theme.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/animate/animate.css">
   <link rel="stylesheet" href="css/newStyle.css">
    
    <style>
        .forming{
            margin-top: 300px;
            margin-left: 300px;;
        }
    
    
    </style>
</head>

<body class="backImg">
  <!-- section for navigation bar -->
  <nav class="navbar fixed-top navbar-white " id="navbar">
    <ul id="rect">
      <li>
        <a href="Asset.php">Home</a>
      </li>
      <li>
        <a href="data.php">ASSETS</a>
      </li>
      <li>
        <a href="contact.asp">ADMIN</a>
      </li>
      <li>
        <a href="about.asp">ABOUT</a>
      </li>
      <li>
        <a class="active shadow-pop-tr" href="login.php">LOGIN</a>
      </li>
      <li style="float:right">
        <a href="#">
          <img class="zenImg" src="https://www.zensar.com/sites/all/themes/new_zensar/logo.png" />
        </a>
      </li>
    </ul>
  </nav>
  <!--end of navigation bar section -->
  

  <!-- top section -->

  
<div class="container">
    
   <div class="card">
  <div class="card-header">
   Login Form
  </div>
  <div class="card-body">
  
     <form action="login.php" method="post" class="forming">
         <input type="email" name="email" class="form-control" placeholder="Email" required><br><br>
        <input type="password" name="password" class="form-control" placeholder="Password" required><br><br>
   <input type="submit" class="btn btn-success" name="login" value="login">

   </form>
   
  </div>
</div>

</div>
  

   <?php
    
    
    require_once 'connect.php';

 if(isset($_POST['login'])){
    
    $email=$_POST['email'];
     $password=$_POST['password'];
     
     

    $insert="SELECT  email,password FROM login WHERE  email='$email' AND password='$password'";
    $in=$con->query($insert);
      $row=mysqli_fetch_array($in);
     if($row>0){
       header("location: data.php");
     }else{
         header("location: login.php");
     }
   

 }
   ?>


  <!--end of cards locks -->
  <script src="js/animate/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
</body>

<footer class="footerBar" style="background-color: rgb(3, 30, 56);">
  <li>
    <p style="padding-left:19px; padding-top: 12px;">lorrem ipsum</p>
  </li>
  <li>
    <p style="padding-left:20px; padding-top: 12px;"> lorrem ipsum</p>
  </li>
  <div class="wow fadeIn" data-wow-duration="5s" data-wow-delay="1s">
  <a href="#" class="fa fa-facebook" ></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-linkedin"></a>
  <a href="#" class="fa fa-instagram"></a>
  </div>
</footer>

</html>