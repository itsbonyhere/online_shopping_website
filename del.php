<?php

$con=mysqli_connect("localhost","root","","flipcart");

$pid=$_GET['id'];



$sel="SELECT * FROM products WHERE pid='$pid'";
$rs=$con->query($sel);
$row=$rs->fetch_assoc();


unlink("PIMG/".$row['image']);

$d="DELETE FROM products WHERE pid='$pid'";
if($con->query($d)){
    header("location:sel.php");
}

?>