<?php
  include "dbconnect.php";
   
?>
<body>
<link rel="stylesheet" href="style2.css">

<form action="savetoproduct.php">

 <div> <label for="cars">Choose category:</label></div> 

  <select class="hl" name="cars" id="cars">
    <?php
         $sqlQuery = "SELECT * FROM `category` ";
         $res = $conn->query($sqlQuery);

         while ($row =mysqli_fetch_object($res)){
          echo "<option value=\"$row->id\">$row->category</option>";
         }
     
     ?>
  </select>
  <br><br>

  <input type="text" placeholder="Enter name" name="name"><br>
    <br>
    <input type="text" placeholder="Enter product price" name="price"><br> <br>
    
    <input type="text" placeholder="Enter Unit" name="unit"><br>
    <br>
    <div class="gl"><input type="submit"></div>
    
 </form>
        </body>