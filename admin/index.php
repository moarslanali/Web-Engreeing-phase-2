<?php
session_start();
if(!isset($_SESSION['Username']))
{
	header('location:LoginForm.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KC|Admin|HomePage</title>
    
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=News+Cycle:400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
</head>

<body >
    
        <nav class="navbar navbar-light navbar-expand-md fixed-top" id="bar">
        <div class="container"><a class="navbar-brand" href="HomePage.php"><mark id="Logo">The MObile Shop</mark></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="LogOut.php" ><img src="https://img.icons8.com/flat_round/25/000000/shutdown.png"> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="Dark ">
      <div class="container site-section ">
         <h1 style="text-align: center;">welcome To Dashboard</h1>
            <div class='row' style="opacity:0.9;">   
                <div class='col-md-6 col-sm-12'>
                    <div class='card'><a href='ManageProducts.php' target='_blank' data-lightbox='cakes'><img src="https://img.icons8.com/cool-color/128/000000/process.png"></a>
                    <div class='card-body'>
                        <Big class='card-text'><a href='ManageProducts.php'><mark id="Logo">Manage Products</mark></a></Big>
                    </div>
                 </div>
            </div>
            </div>
        </div>
        </div> 
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/index.js"></script>
</body>

</html>
