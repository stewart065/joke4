<?php
        require_once "dbconnect.php";
        $prodid =$_GET['id'];
        $productquery="DELETE FROM product where id ='$prodid'";
        $resultSet =$conn->query($productquery);
        if($resultSet){
           
            header("location:display.php");
        }
?>