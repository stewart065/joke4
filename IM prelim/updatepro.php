<?php
    require_once "dbconnect.php";
    $prodid =$_GET['id'];
    $productquery="SELECT * FROM product where id ='$prodid'";
    $resultSet =$conn->query($productquery);
    $row1=$resultSet->fetch_assoc();

    if($_POST){

        $proname = $_POST['name'];
        $procat = $_POST['cars'];
        $proprice = $_POST['price'];
        $prounit = $_POST ['unit'];
      
        $sqlQuery = "UPDATE product SET name = '$proname', price = '$proprice', unit = '$prounit',category = '$procat ' WHERE id = '$prodid'";
        $res = $conn->query($sqlQuery);
        header('Location: display.php');
    }
?>
<link rel="stylesheet" href="style2.css">
<form action="" method = "POST">

<div> <label for="cars">Choose category:</label></div> 

 <select class="hl" name="cars" id="cars">
   <?php
        $sqlQuery = "SELECT * FROM `category` ";
        $res = $conn->query($sqlQuery);

        while ($row =mysqli_fetch_object($res)){
         if($row->id==$row1['category']){
            echo "<option selected value=\"$row->id\">$row->category</option>";
         }
         else{
            echo "<option value=\"$row->id\">$row->category</option>";
         }
        }
    
    ?>
 </select>
 <br><br>

   <input type="text" placeholder="Enter name" value=<?php echo $row1["name"] ?> name="name">

   <input type="text" placeholder="Enter product price" value=<?php echo $row1['price'] ?> name="price">
   
   <input type="text" placeholder="Enter Unit" value=<?php echo $row1["unit"] ?> name="unit">
  
   <div class="gl"><input type="submit"></div>
   
</form>