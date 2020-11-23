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
        <a href="news.asp">ASSETS</a>
      </li>
      <li>
        <a href="contact.asp">ADMIN</a>
      </li>
      <li>
        <a href="about.asp">ABOUT</a>
      </li>
      <li>
        <a class="active" href="about.asp">Register Laptop</a>
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
   <form action="laptopRegister.php" method="post" class="forming">

   <input type="text" class="form-control" name="AssetTag" placeholder="AssetTag.." /><br/>
        <input type="text" class="form-control" name="SerialNumber" placeholder="SerialNumber.."/><br/>
        <input type="text" class="form-control" name="BrandName" placeholder="BrandName.." /><br/>
         <input type="text" class="form-control" name="OperatingSystem" placeholder="OperatingSystem.." /><br/>
        <input type="text" class="form-control" name="RAM" placeholder="RAM.." /><br/>
        <input type="text" class="form-control" name="Status" placeholder="Status.." /><br/>
   <input type="submit"   class="btn btn-success btn-md" name="submit" value="Send" />

    
   </form>
  </div>

   <?php
    
    
    require_once 'connect.php';

 if(isset($_POST['submit'])){
    
    $assetTag=$_POST['AssetTag'];
     $serial=$_POST['SerialNumber'];
     $BrandName=$_POST['BrandName'];
     $operatingS = $_POST['OperatingSystem'];
     $ramS = $_POST['RAM'];
     $status = $_POST['Status'];
     
     

    $insert="INSERT INTO laptop(`AssetTag`, `SerialNumber`, `BrandName`, `OperatingSystem`, `RAM`, `Status`)
    VALUES ('$assetTag','$serial','$BrandName',' $operatingS','$ramS','$status')";
    $in=$con->query($insert);
     if($in===TRUE){
       header("location: laptop.php");
     }else{
         header("location: laptopRegister.php");
     }
   

 }
   ?>


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