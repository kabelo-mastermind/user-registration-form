<?php
include 'dbh.php';
if(isset($_POST['submit']))
{
    $Fname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confPassword = $_POST['confermpassword']; 

    $Fname = stripslashes($Fname);
    $username = stripslashes($username);
    $email = stripslashes($email);
    $password = stripslashes($password);
    $confPassword = stripslashes($confPassword);
   
    $Fname = mysqli_real_escape_string($conn,$Fname);
    $username = mysqli_real_escape_string($conn,$username);
    $email = mysqli_real_escape_string($conn,$email);
    $password = mysqli_real_escape_string($conn,$password);
    $confPassword = mysqli_real_escape_string($conn,$confPassword);

    $sql = "INSERT INTO users(fullname,username, email, password, confPassword) values(' $Fname', '$username', '$email', '$password', '$confPassword')";
    $qInput = mysqli_query($conn,$sql); 
	print "<script>alert('successfuly registerd')</script>";
	header("location:thanks.php");
	//$_SESSION['username'] = $username;
}


?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	
	<div class="box">
	
		<div class="inner-box">
		
		<form action="register.php" method="post">
		<h2>SignUp Today</h2>
		
		<input type="text" name="fullname" placeholder="Your Full Name" required/>
		<input type="text" name="username" placeholder="Username" required/>
		<input type="email" name="email" placeholder="Email Address" required/>
		<input type="password" name="password" placeholder="Password" required/>
		<input type="password" name="confermpassword" placeholder="Conform Password" required/>
		<input type="submit" name="submit" value="SignUp" />
		
		<p style="text-align:center;" >
				<span>Already Register ? </span><a class="link" href="login.php">Sign In</a>
		</p>
		
		</form>
		
		</div>
		
	</div>
	
</body>
</html>
