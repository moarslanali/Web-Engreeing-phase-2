<?php
require('Require/Connection/Connection.php');
//Data Receive 
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
$ProductName = $_POST['ProductName'];
$ProductPrice = $_POST['ProductPrice'];
$ProductCode = $_POST['ProductCode'];
$ProductInStock = $_POST['ProductInStock'];
$ProductDiscount = $_POST['ProductDiscount'];
$ProductAvailableSize = $_POST['ProductAvailableSize'];
$productImage=$_FILES["fileToUpload"]["name"];
$ProductDetails = $_POST['ProductDetails'];
//Insertion into Database
$query = "INSERT INTO tblproducts  (ProductName,ProductPrice,ProductCode,ProductInStock,ProductDiscount,ProductAvailableSize,ProductDetails,ProductImage)
VALUES ('$ProductName','$ProductPrice','$ProductCode','$ProductInStock','$ProductDiscount','$ProductAvailableSize','$ProductDetails','$productImage')";
//Run the query
$run = mysqli_query($conn,$query);
if (!$run)
{
    echo "Oops !! ERROR";
}
else
{
    header('location:../products.php');
}
?>