<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminLoginForm</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/StylingForLogInForm.css">
</head>

<body>

<div>
    <div class="container-fluid">
        <div class="row mh-100vh">
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
                <div class="m-auto w-lg-75 w-xl-50">
                    <h2 class="text-success font-weight-light mb-5" ><b style="font-family:monospace;">Mobile Shop</b></h2>
					<p><?php if(isset($_GET["error"])) {echo 'Wrong username or password';} ?></p>
                    <form action="AdminChecker.php" method="post">
                        <div class="form-group"><input class="form-control" type="text" name="Username" placeholder="Username" required></div>
                        <div class="form-group"><input class="form-control" type="password" name="Password" placeholder="Password" required></div><button class="btn btn-success mt-2" type="submit" name="submit">Log In</button></form>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-image:url(&quot;../assets/img/Screen-Shot-2014-02-11-at-6.02.35-AM.png&quot;);background-size:cover;background-position:center center;">
            </div>
        </div>
    </div></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>


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
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <h2>Map</h2>
                <iframe width="100%" height="175" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27221.526032286914!2d74.3085823669708!3d31.477692010609477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391904106691c4c7%3A0xfb24ddaf1e7bc6c2!2sModel+Town%2C+Lahore%2C+Punjab%2C+Pakistan!5e0!3m2!1sen!2s!4v1551908327972" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
    <div class="btm">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                Copyright right © 2019 <a href="#">The Mobile Shop</a>. All Rights Reserved.
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right">
                Design &amp; Developed by <b style="color: #007bff">Moon Light<b>
                </b></b></div><b style="color: #007bff"><b>
            </b></b></div><b style="color: #007bff"><b>
        </b></b></div><b style="color: #007bff"><b>
    </b></b></div><b style="color: #007bff"><b>
</b></b></footer>
   
</body>

</html>