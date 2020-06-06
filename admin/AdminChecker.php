<?php
require('Require/Connection/Connection.php');
$Username=$_POST['Username']; 
$Password=$_POST['Password']; 
		$query="select * from tabluser WHERE Username='$Username' AND Password='$Password'";
		$query_run=mysqli_query($conn,$query);
		$Counter=mysqli_num_rows($query_run);
    if($Counter==1)
		{
			session_start();
			$_SESSION['Username']=$Username;
			$_SESSION['Password']=$Password;
			header('Location:index.php');
			exit( );
		}
		else 
		{
			header('Location:LoginForm.php?error=y');
			exit();
		}
?>