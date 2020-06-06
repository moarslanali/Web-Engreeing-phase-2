<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/styles-1.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body><a href="bootstrap.min.css"></a>
  <a href="bootstrap.bundle.js"></a>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<header>
    <br>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-6">
                <img src="assets/img/images.png" alt="Logo of Our Company" style="width: 60%" height="100%">
            </div>
            <div class="col-md-5" style="text-align: right">
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
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> &nbsp;
          <a href="Admin/LogInForm.php" class="btn btn-primary btno">Login</a> 
        </form>
      </div>
    </nav>
</header> 
 <br>
<div class="container1">
  <div style="text-align:center">
    <h2>Contact Us</h2>
  </div>
  <div class="row">
  <div class="col-md-3"></div>
    <div class="col-md-6">
      <form action="/action_page.php">
        <label for="fname">First Name :</label>
        <input class="form-control" type="text"  id="fname" name="firstname" placeholder="Your first name...">
        <label for="lname">Last Name :</label>
        <input class="form-control" type="text" id="lname" name="lastname" placeholder="Your last name...">
		<label for="email">Email :</label>
        <input class="form-control" type="EMAIL" id="lname" name="EMAIL" placeholder="YOUR EMAIL"><br>
			<label for="role">Role : &nbsp;</label>
        <input type="radio" id="role" name="role"> Student &nbsp;
		 <input type="radio" id="role" name="role"> Teacher<br>
        <label for="city">City : </label>
        <select class="form-control" id="city name=" city"="">
          <option value="lahore">Lahore</option>
          <option value="karachi">Karachi</option>
          <option value="multan">Multan</option>
        </select>
        <label for="subject">Message</label>
        <textarea class="form-control" id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>
	<br><br>
					<a href="#" class="btn btn-primary btno">Submit</a>
				<br>
      </form>
    </div>
  </div>
</div>
<br>
<footer class="foot">
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			 <h2 style="font-family: Arial, Helvetica, sans-serif;">Sign up for updates</h2>
                <form>
				<input type="text" id="email" name="email" placeholder="abc@gmail.com">
				<br><br>
					<a href="#" class="btn btn-primary btno">Submit</a>
        
				<br>
				<br>
				
				<div id="ficon">
				<a href="https://www.google.com.pk/"><i class="fab fa-google-plus-g"></i></a>
				<a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
			<a href="https://twitter.com/">	<i class="fab fa-twitter"></i></a>
				<a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
				<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
				</div>
</form>	
              </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <h2>Popular Categories</h2>
                <ul class="list">
                  <li><span class="glyphicon glyphicon-triangle-right"></span><a href="">Apple</a></li>
                  <li><span class="glyphicon glyphicon-triangle-right"></span><a href="">Samsung</a></li>
                  <li><span class="glyphicon glyphicon-triangle-right"></span><a href="">Huawei</a></li>
                </ul>
                
            </div>
            </div>
    </div>
    <div class="btm">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                Copyright right © 2020-21 <a href="#">The Mobile Shop</a>. All Rights Reserved.
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right">
                Design &amp; Developed by <b style="color: #007bff">Malik's<b>
                </b></b></div><b style="color: #007bff"><b>
            </b></b></div><b style="color: #007bff"><b>
        </b></b></div><b style="color: #007bff"><b>
    </b></b></div><b style="color: #007bff"><b>
</b></b></footer><b style="color: #007bff"><b> 
  
  


</b></b>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>