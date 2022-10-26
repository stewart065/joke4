<?php
    require_once "dbconnect.php";
?>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style3.css">
</html>
<body>

 <form action="productadd.php">
<table>
<button type="Add">Add Product</button>
    <tr>
        
    <th>Category name</th>
        <th>Name</th>


        <th>Price</th>

        <th>Units</th>

        <th>action</th>
       
    </tr>
        

    <?php
        $sql = "SELECT category.category as category, product.id, product.name, product.price,product.unit FROM category INNER JOIN product ON category.id = product.category;";
        $result = $conn->query($sql); 
        
        while($row = mysqli_fetch_object($result)){
            echo "<tr>";
             
            echo "<td>$row->category</td>";
            echo "<td>$row->name</td>";
            echo "<td>$row->price</td>";
            echo "<td>$row->unit</td>";
            echo " <td><a href='updatepro.php?id=$row->id'>Update</a></td>";
            echo " <td><a href='deletepro.php?id=<?php echo $row->id'>Delete</a></td>";
            echo"</tr>";
        }
      
    ?>
    
     
</table>
</form>
    </body>