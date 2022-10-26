<?php

    require_once "dbconnect.php";
    $catName = $_GET['name'];
   

    $sql = "insert into category ( category ) values ('$catName')";
    $result = $conn->query($sql);

    if($result)
        header("Location: cat.php");
    else
        echo "Failed";