<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KC|Admin|ManageProducts</title>
    
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=News+Cycle:400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
</head>

<body>
    
     <?php include 'Include/AdminHeader.php';?>
        <div class="contact-clean" style="padding-top:75px;">
            <form action="InsertProduct.php" method="post" enctype="multipart/form-data">
                <h2 class="text-monospace text-center" id="Form-Heading">Add Product</h2>
                <div class="form-group"><input class="form-control" type="text" name="ProductName" placeholder="Product Name" required></div>
                <div class="form-group"><input class="form-control" type="number" name="ProductPrice" placeholder="Product Price" required></div>
                <div class="form-group"><input class="form-control" type="number" name="ProductCode" placeholder="Product Code" required></div>   
                <div class="form-group"><input class="form-control" type="number" name="ProductDiscount" placeholder="Product Discount" required></div>   
                <div class="form-group"><input class="form-control" type="text" name="ProductAvailableSize" placeholder="Available " required></div>
                <div class="form-group"><textarea class="form-control" name="ProductDetails" placeholder="Product Details" required></textarea></div>
                <div class="form-group"><input type="file" name="fileToUpload" id="fileToUpload" class="form-control" required></div>
				<div class="form-group"><label style="color:#FFF">Product In Stock:</label><select class="form-control"name="ProductInStock" required><option value="Yes">Yes</option><option value="No">No</option></select></div>
                
				<div class="form-group"><button class="btn btn-success" name="Submit" type="submit" id="Form-Submit-Button">Add</button></div>
            </form>
        </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/index.js"></script>
</body>

</html>
