<?php
 
require_once "connect.php";

    if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM Asset WHERE id = $id")or die($mysqli->error());
    }


?>