<?php
$con=mysqli_connect("localhost","root","","flipcart");

$a=$_POST['pname'];
$b=$_POST['price'];
$c=$_POST['contact'];
$d=$_POST['location'];


$buf=$_FILES['pimg']['tmp_name'];
$fn=time().$_FILES['pimg']['name'];
move_uploaded_file($buf,"PIMG/".$fn);


$ins="INSERT INTO products SET pname='$a',price='$b',contact='$c',location='$d',image='$fn'";
$con->query($ins);

?>

<h1>Product Name : <?php echo $a?></h1>
<h1>Price : <?php echo $b?></h1>
<h1>Contact No : <?php echo $c?></h1>
<h1>Delivery Location : <?php echo $d?></h1>
<h1>Product Image: <p><img src="PIMG/<?php echo $fn?>"/></p></h1>