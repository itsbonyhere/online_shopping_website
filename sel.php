<?php $con=mysqli_connect("localhost","root","","flipcart");?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<p><a href="index.php">Add New Products</a><p>

<div class="container mt-3">
  <h2>Products Table</h2>
  <table class="table table-bordered">

    <thead>
      <tr>
        <th>Product Name</th>
        <th>Price</th>
        <th>Contact No</th>
        <th>Delivery Location</th>
        <th>Product Image</th>


      </tr>
    </thead>
    <tbody>
<?php

$sel="SELECT * FROM products";
$rs=$con->query($sel);
while($row=$rs->fetch_assoc()){



?>



      <tr>
      
      
    <td><?php echo $row['pid'];?></td>
    <td><?php echo $row['pname'];?></td>
    <td><?php echo $row['price'];?></td>
    <td><?php echo $row['contact'];?></td>
    <td><?php echo $row['location'];?></td>

    <td><img style="width:100px;"src="PIMG/<?php echo $row['image'];?>"></td>

    <td><a onclick="return confirm('Are You Sure ?'); " href="del.php?id=<?php echo $row ['pid']; ?>">Delete</a></td>

  

      </tr>
    </tbody>
    <?php   } ?>

  </table>
</div>

</body>
</html>
