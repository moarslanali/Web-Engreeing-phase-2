<?php
require('Require/Connection/Connection.php');
$query = "SELECT * FROM tblproducts ";
$run = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KC|UpdateProducts</title>
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
    <script type="text/javascript" src="assets/js/GoingToTop.js"></script>
</head>

<body>
    <?php include 'Include/AdminHeader.php';?>
    <div class="container site-section" id="welcome">
        <h1 style="text-align: left;">Our Products</h1>
        <?php
        while ($row = mysqli_fetch_array($run)) 
        {
                echo "<div class='row'>   
            <div class='col-md-4 col-sm-12'>
                <div class='card'><a href='/assets/img/Samsung-Galaxy-S10.jpg' target='_blank' data-lightbox='cakes'><img class='img-fluid' src='../uploads/".$row['ProductImage']."'></a>
                    <div class='card-body'>
                        <big class='card-text'><a href='../ProductDetail.php?ID=".$row['ID']."'><b>".$row['ProductName']."</b></a></big>
                        <div><a href='DeleteProduct.php?ID=".$row['ID']."'class='btn btn-sm btn-danger'>DELETE</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>";
        }
        ?>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox-plus-jquery.min.js"></script>
</body>
</html>