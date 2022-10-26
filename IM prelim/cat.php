<?php

    require_once "dbconnect.php";
    
    if($_GET){
        $catName = $_GET["name"];
       

        $sql = "insert into category ( category ) values ('$catName')";
        $result = $conn->query($sql);

        if($result)
            header("Location: cat.php");
        else
            echo "Failed";
    }

?>
<link rel="stylesheet" href="style.css">
<form action="catsave.php" method="get">
    <input type="text" placeholder="Enter Category name" name="name">
    <br>
    <input type="submit">
</form>