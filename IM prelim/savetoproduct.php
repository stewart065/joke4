<?php

    require_once "dbconnect.php";

    $proCat = $_GET['cars'];
    $proname = $_GET['name'];
    $proprice = $_GET['price'];
    $prounit = $_GET['unit'];

    $sql = "INSERT INTO `product`(`category`, `name`, `price`, `unit`) VALUES (' $proCat','$proname','$proprice','$prounit')";
    $result = $conn->query($sql);

    if($result)
        header("Location: display.php");
    else
        echo "Failed";