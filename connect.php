<?php


$host='localhost';
$user='root';
$password='';
$dbname='asset';

$update = false;
$AssetTag ="";
$SerialNumber ="";
$BrandName ="";
$OperatingSystem ="";
$RAM ="";
$Status ="";

$con=new mysqli($host,$user,$password,$dbname);

if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $con->query("DELETE FROM laptop WHERE id=$id")or die($con->error());
    } 

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result = $con->query("SELECT * FROM laptop WHERE id=$id") or die($con->error());
    
    if(count($result)==1){
        $row = $result->fetch_array();
        $update = true;
        $AssetTag = $row['AssetTag'];
        $SerialNumber = $row['SerialNumber'];
        $BrandName = $row['BrandName'];
        $OperatingSystem = $row['OperatingSystem'];
        $RAM = $row['RAM'];
        $Status = $row['Status'];
    }
}

if(isset($_POST['update'])){
    
    $results = $con->query("UPDATE `laptop` SET `id`=,`AssetTag`= $AssetTag,`SerialNumber`=$SerialNumber,`BrandName`=$BrandName,`OperatingSystem`= $OperatingSystem,`RAM`=$RAM,`Status`=$Status WHERE id=$id")or die($con->error());
    
}

?>