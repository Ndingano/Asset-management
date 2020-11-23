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
    <link rel="stylesheet" href="css/bootstrap.css">
    
    
    <style>
        
        
        .go{
           margin-top: 70px;
            margin-left: 300px;
        }
        table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
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
        <a  class="active" href="laptop.php">LAPTOP</a>
      </li>
       <li>
        <a href="server.php">SERVER</a>
      </li>
        <li>
        <a href="Asset.php">REGISTER ASSETS</a>
      </li>
      <li style="float:right">
        <a href="#">
          <img class="zenImg" src="https://www.zensar.com/sites/all/themes/new_zensar/logo.png" />
        </a>
      </li>
    </ul>
  </nav>
  <!--end of navigation bar section -->
  
<div class="go">
    
    
    
    </div>
<?php
    
    require_once 'connect.php';
    $sql="SELECT * FROM `laptop`";
    $result=$con->query($sql);
    if($result->num_rows>0){
   
    
       echo "<table class=table-hover>
       <tr>
       <th>Asset Tag</th>
       <th>Serial Number</th>
        <th>BrandName</th>
       <th>Operating System</th>
       <th>RAM</th>
        <th>Status</th>
       <th>Update</th>
       <th>Delete</th>
   
       </tr>";
       
     while($row=$result->fetch_assoc()){ ?>
          <tr>
       <td><?php echo $row["AssetTag"] ?></td>
       <td><?php echo $row["SerialNumber"]?></td>
       <td><?php echo $row["BrandName"]?></td>
       <td><?php echo $row["OperatingSystem"]?></td>
       <td><?php echo $row["RAM"] ?></td>
       <td><?php echo $row["Status"]?></td>
     
        <td><a class="btn btn-info" href="laptop.php?edit=<?php echo $row['id']; ?>">Update</a></td>
    <td><a class="btn btn-warning" href="connect.php?delete=<?php echo $row['id']; ?>">Delete</a></td>
          </tr>
   
            
       <?php }
       ?>
       
         <?php
        echo"</table>";
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