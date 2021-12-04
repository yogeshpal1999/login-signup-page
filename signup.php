<html>
<head>
	<title>
		Signup Page
	</title>
	<script src="javascript/jquery/jquery.min.js"> </script>
		
	<style>
	body{
		margin:0px;
		padding:0px;
		background-color:#1f2837;
		}
	#wrapper{
		width:100%;	
		text-align: center;
		}
	
		#topheading{
			text-align:center;
			font-family:segoe ui;
			font-size:30px;
			margin-top: 30px;
			color: white;
			}
	form{
		border-radius:10px;
		background-color:#ea1b35;
		margin:auto 25%;
		padding: 25px;
		box-shadow:0 5px 30px 1px white;
		}
	label{
		float:left;
		width:50%;
		padding-bottom:10px;
		font-family:segoe ui;
		font-size:20px;
		color:white;	
		}
	input{
		padding-bottom:10px;
		font-family:segoe ui;
		font-size:18px;
		border-radius:5px;
		
		}
	#submit{
		background-color:#1f2837;
		border:none;
		text-align:center;
		padding:8px 25px;
		border-radius:10px;		
		color:white;
		}
	#login{
		color:white;
		}
	a{
		text-decoration: none;
		color: #1f2837;
		font-weight:bold;
	}	
	
	</style>
</head>
<body>
<div id="wrapper">
	<div id="topheading">
		<h1> Sign Up </h1><br>
	</div>
<form method="POST">	
	<div id="form-element">
		<label for="name">Name</label>
		<input type="text" name="name" id="name" ><br><br>
	</div>
	
	<div id="form-element">
		<label for="email">Email</label>
		<input type="email" name="email" id="email" required><br><br>
	</div>
	
	<div id="form-element">
		<label for="password">Password</label>
		<input type="password" name="password" id="password" required><br><br>
	</div>
<!--	<div id="form-element">
		<label for="cpassword">Confirm Password</label>
		<input type="password" name="cpassword" id="cpassword" required><br><br>
	</div>
	-->
	<div id="form-element">
		<input type="submit" name="submit" id="submit">
	</div>
	<div id="login">
		<br>Already have an account? 
		<a href="login.php"> Login </a>
	</div>

</form>
</div>
</body>
</html>

<?php
// connect to database
	
 if($_POST){
	 
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	//validate email
   	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo '<script> alert("Email Incorrect") </script>';
	}
	
	else 
	{
		$link= mysqli_connect("localhost", "root","tusshartg420@p", "userdata");
	//check database connection
		if(mysqli_connect_error()){
			die("Error to connect database");
		}
		
		else {

            $query = "SELECT `id` FROM `userdata_form1` WHERE email = '".mysqli_real_escape_string($link, $email)."'";

            if($result = mysqli_query($link, $query)){
       
				if (mysqli_num_rows($result) > 0) {    
					echo ('<script>alert("Email is already taken. Please use other email or login using this email.")</script>');
				
					}
				
				else {
					$query = "INSERT INTO `userdata_form1` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $email)."', '".mysqli_real_escape_string($link, $password)."')";
                
					if (mysqli_query($link, $query)) 
					{
						echo ('<script>alert("successfully signup")</script>');
						header("refresh:0.5; url='login.php'");
					} 
					else {
						echo "<h1>There was a problem signing you up - please try again later.</h1>";
					}     
					}
   
			}
		}
	}
}
?>