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
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
        <a href="index.php">Home</a>
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
        <a class="active shadow-pop-tr"  href="news.asp">REGISTER ASSET</a>
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
   <form action="Asset.php" method="post" class="forming">

   <input type="text" class="form-control" name="TowerNumber" placeholder="TowerNumber.." /><br/>
        <input type="text" class="form-control" name="status" placeholder="status.."/><br/>
        <input type="text" class="form-control" name="BrandName" placeholder="BrandName.." /><br/>
        <input type="text" class="form-control" name="monitorS" placeholder="monitorS.."/><br/>
        <input type="text" class="form-control" name="keyboard" placeholder="keyboard.."/><br/>
        <input type="text" class="form-control" name="mouse" placeholder="mouse.." />
   <input type="submit"   class="btn btn-success btn-md" name="submit" value="Send" />

    
   </form>
  </div>

   <?php
    
    
    require_once 'connect.php';

 if(isset($_POST['submit'])){
    
    $Tower=$_POST['TowerNumber'];
     $status=$_POST['status'];
     $BrandName=$_POST['BrandName'];
     $monitorS=$_POST['monitorS'];
     $keyboard=$_POST['keyboard'];
     $mouse=$_POST['mouse'];
     

    $insert="INSERT INTO checking(TowerNumber,status,BrandName,monitorS,keyboard,mouse) VALUES ('$Tower','$status','$BrandName','$monitorS','$keyboard','$mouse')";
    $in=$con->query($insert);
     if($in===TRUE){
       header("location: data.php");
     }else{
         header("location: Asset.php");
     }
   

 }
   ?>
<script src="three.r92.min.js"></script>
<script src="vanta.dots.min.js"></script>
<script>
VANTA.DOTS({
  el: "#your-element-selector"
})
</script>

  <!--end of cards locks -->
  <script src="js/animate/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
</body>

<footer class="footerBar" >
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