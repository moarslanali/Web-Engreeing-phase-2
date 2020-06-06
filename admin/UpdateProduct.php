<?php
require('Require/Connection/Connection.php');
$ID = $_GET['ID'];
$query = "SELECT * FROM tblproducts where ID='$ID'";
$run = mysqli_query($conn,$query);
while ($row = mysqli_fetch_array($run))
{
    $ProductName = $row['ProductName'];
    $ProductPrice = $row['ProductPrice'];
    $ProductCode = $row['ProductCode'];
    $ProductInStock = $row['ProductInStock'];
    $ProductDiscount = $row['ProductDiscount'];
    $ProductAvailableSize = $row['ProductAvailableSize'];
    $ProductDetails = $row['ProductDetails'];
    $ProductDetails= $row['ProductImage'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KC|UpdateProduct</title>
    
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=News+Cycle:400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <script type="text/javascript" src="assets/js/GoingToTop.js"></script>
</head>

<body>
     <?php include 'Include/AdminHeader.php';?>
     <div class="contact-clean" style="padding-top: 75px;">
        <form action="FinalUpdate.php" method="get" enctype="multipart/form-data">
        <input type="hidden" name="ID" value="<?=$ID?>"> 
            <h2 class="text-monospace text-center" id="Form-Heading">UPDATE Product</h2>
            <div class="form-group"><input class="form-control" type="text" name="ProductName" value="<?=$ProductName?>" required></div>
            <div class="form-group"><input class="form-control" type="number" name="ProductPrice" value="<?=$ProductPrice?>" required></div>
            <div class="form-group"><input class="form-control" type="number" name="ProductCode" value="<?=$ProductCode?>" required></div>   
            <div class="form-group"><input class="form-control" type="number" name="ProductDiscount" value="<?=$ProductDiscount?>" required></div>   
            <div class="form-group"><input class="form-control" type="text" name="ProductAvailableSize" value="<?=$ProductAvailableSize?>" required></div>
            <div class="form-group"><textarea class="form-control" name="ProductDetails" value="<?=$ProductDetails?>" required></textarea></div>
           <div class="form-group"><label style="color:#FFF">Product In Stock:</label><select class="form-control"name="ProductInStock" required><option value="Yes" <?php if($ProductInStock=='Yes')echo 'selected';?>>Yes</option><option value="No" <?php if($ProductInStock=='No')echo 'selected';?>>No</option></select></div>
                
		   <div></div>
            <div class="form-group"><button class="btn btn-success" name="Submit" type="submit" id="Form-Submit-Button">UPDATE</button></div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/index.js"></script>
</body>

</html>
