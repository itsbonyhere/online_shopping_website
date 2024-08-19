<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <body bgcolor=yellow>

<form action="ins.php" method="post" enctype="multipart/form-data">

    <h1 style="background-color:DodgerBlue;" >FLIPCART</h1>

    <p>Product Name<p>
        <p><input type=text name=pname></p>
    <p>Price</p>
        <p><input type=number name=price></p>
    <p>Contact No</p>     
        <p><input type=text name=contact></p>
    <p>Select Delivery Location</p>
        <p><input type=text name=location></p>
    <p>Product Image</p>
        <p><input type=file id=productimage name=pimg></p>    


    <p><input type=submit name=save value=save ></p>    


</body>
</html>