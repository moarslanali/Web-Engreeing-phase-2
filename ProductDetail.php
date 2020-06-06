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
	$ImageName = $row['ProductImage'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KC|Products</title>
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Aladin" rel="stylesheet">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=News+Cycle:400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" type="text/css" href="engine5/style.css" />
    <script type="text/javascript" src="engine5/jquery.js"></script>
    <script type="text/javascript" src="assets/js/GoingToTop.js"></script>
</head>

<body>
<a href="bootstrap.min.css"></a>
<a href="bootstrap.bundle.js"></a>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<link rel="icon" type="image/png" href="assets/img/Screen-Shot-2014-02-11-at-6.02.35-AM.png">

<link rel="Products Details" type="text/html" href="Productdetail.php">
<link rel="Contact Us" type="text/html" href="Contact Us.php">
<link rel="About us" type="text/html" href="About Us.php">
<link rel="Home" type="text/html" href="Home.php">
<link rel="Products" type="text/html" href="products.php">



<header style="background-color: ">
    <br>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1">

            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <img src="assets/img/images.png" alt="Logo of Our Company" style="width: 60%" height="100%">
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5" style="text-align: right">
                <br>
                <a href="https://www.google.com.pk/"><img src="assets/img/thAQ0AK6LV.jpg" alt="Google" height="40px" width="40px"></a>
                <a href="https://www.youtube.com/"><img src="assets/img/th5XKBPRBU.jpg" alt="YouTube" height="40px" width="40px"></a>
                <a href="https://twitter.com/"><img src="assets/img/thCS3C6GTB.jpg" alt="Twiter" height="40px" width="40px"></a>
                <a href="https://www.instagram.com/"><img src="assets/img/thO2V2LV5S.jpg" alt="Instagram" height="40px" width="40px"></a>
                <a href="https://www.facebook.com/"><img src="assets/img/thUM3FIYJT.jpg" alt="Facebook" height="40px" width="40px"></a>
            </div>
        </div>
    </div>
    <br>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php"> Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="products.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Products
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="products.php">Apple</a>
              <a class="dropdown-item" href="products.php">Samsung</a>
              <a class="dropdown-item" href="products.php">Huawei</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="About Us.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Contact Us.php">Contact Us</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" align="right">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <div class="container site-section" id="welcome">
        <h1 style="text-align: left;"><?=$ProductName?> Details</h1>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <img class="img-fluid" src="uploads/<?=$ImageName?>" href="uploads/<?=$ImageName?>" target="_blank" style="width: 250px;height: auto;">
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card-body">
                    <lable>Product Price: </lable><small>PKR <?=$ProductPrice?></small><br>
                    <lable>Product Code: </lable><small><?=$ProductCode ?></small><br>
                    <lable>&nbsp; &nbsp; Product In Stock: </lable><small><?=$ProductInStock?></small><br>
                    <lable>Product Discount: </lable><small><?=$ProductDiscount?>%</small><br>
                    <lable>Available Sizes: </lable><small><?=$ProductAvailableSize?></small><br>

                </div>
            </div>
        </div>
    </div>
    <div class="container site-section" id="welcome" style="padding-top: 10px;">
        <h1 id="Heading">Product Details<br></h1>

        <div id="p1">
        <?=$ProductDetails?><br>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox-plus-jquery.min.js"></script>
</body>
</html>