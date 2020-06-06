<?php
require('Require/Connection/Connection.php');
$ProductName = $_GET['ProductName'];
$ProductPrice = $_GET['ProductPrice'];
$ProductCode = $_GET['ProductCode'];
$ProductInStock = $_GET['ProductInStock'];
$ProductDiscount = $_GET['ProductDiscount'];
$ProductAvailableSize = $_GET['ProductAvailableSize'];
$ProductDetails = $_GET['ProductDetails'];
$ID = $_GET['ID'];
$query = "UPDATE tblproducts  
SET ProductName= '$ProductName', ProductPrice='$ProductPrice',ProductCode='$ProductCode',
ProductInStock= '$ProductInStock', ProductPrice='$ProductPrice',ProductDiscount='$ProductDiscount',
ProductAvailableSize='$ProductAvailableSize',ProductDetails='$ProductDetails'
WHERE ID=$ID ";
$run = mysqli_query($conn,$query);
if (!$run){
    echo "Oops !! ERROR";
}else{
    header('location:UpdateProducts.php');
}
?>