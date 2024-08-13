<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		body{

	background: url("../img/background/b2.jpg");
	background-size: cover;
				}
		ul a{
			color: #fff;
		}

		.form{
	
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
}
		
		*{
			font-family: sans-serif;
			box-sizing: border-box;
		}
		form{
			width: 500px;
			border: 2px solid #ccc;
			padding: 30px;
			background: #fff;
			border-radius: 15px;
		}
	
		h2{
			text-align: center;
			margin-bottom: 40px;
		}
		input{
			display: block;
			border: 2px solid #ccc;
			width: 95%;
			padding: 10px;
			margin: 10px auto;
			border-radius: 5px;
		}
		label{
			color: #888;
			font-size: 18px;
			padding: 10px;
		}
		.button{
			float: right;
			background: #ff523b;
			padding: 10px 15px;
			color: #fff;
			border-radius: 5px;
			margin-right: 10px;
			border:none;
		}
		.button:hover{
			opacity: .7;
		}
		form a{
			text-decoration: none;
			font-size: 15px;
			line-height: 25px;
			color:#ff523b;
			
		}
.footer{
	background:hsla(217,90%,8%,1.00);
}
		.footer h4{
			color: #fff;
		}
.footer-col-1, .footer-col-2, .footer-col-3,.footer-col-4{
	min-width: 250px;
	margin-bottom: 10px;
		}
	.footer-col-1{
	flex: 1;
	text-align: center;
}
.footer-col-1 img{
	width:150px;
	margin-bottom: 20px;
		}
		.footer-col-3 .social{
			width: 100%;
		}
		.footer-col-3 .social a{
			font-size: 1.2em;
			color: #fff;
			padding: 8px;
			background: rgba(255,255,255,0.08);
			border-radius: 4px;
			box-shadow: 0 4px 4px rgba(0,0,0,0.5);
		}	
		
		.footer-col-3 .social a:hover{
			background: #3b7cf5;
		}
	
		
		
	</style>
</head>

<body>
	
	<div class="container">
	<div class="navbar">
		<div class="logo">
	<img src="../img/background/footer-logo.png" width="125px">
	
	
	</div>
		<nav>
		<ul>
		<li><a class="link" href = "index.html">HOME</a></li>
		<li><a  class="link" href = "product.html">PRODUCTS</a></li>
		<li><a class="link" href = "about.html">ABOUT</a></li>
		<li><a class="link" href = "contact.php">CONTACT</a></li>
		<li><a class="link" href = "account.php">ACCOUNT</a></li>	
			
			</ul>
		
		</nav>
		<img src="../img/background/cart.png" width="30px" height="30px">
	</div>
		<div class="form">
		<form>
		<h2>LOGIN</h2>
		
		<label>user name</label>
		<input type="text" name="uname" placeholder="username"><br>
		
		<label>password</label>
		<input type="password" name="password" placeholder="password"><br>
		
      
    
		
			
		<input name="btnSubmit" type="submit" class="button" id="btnSubmit" value="LOGIN"   />
		<a href="register.php">Create An Account?</a>
		
		
		
		
		</form>
	</div>
	<!..............footer...........>
	<div class="footer">
	<div class="container">
		<div class="row">
		<div class="footer-col-1">
			<img src="../img/background/footer-logo.png">
			</div>
		<div class="footer-col-2">
			<h4>Our Pages</h4>
				<ul>
		<a href="index.html">HOME</a><br>
		<a href="product.html">PRODUCT</a><br>
		<a href="about.html">ABOUT</a><br>
		<a href="contact.php">CONTACT</a><br>
		<a href="account.php">ACCOUNT</a><br>
					
				</ul>
			</div>
		<div class="footer-col-3">
			<div class="social">
			<h4>SOCIAL Links</h4>
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-twitter"></a>
				<a href="#" class="fa fa-youtube"></a>
			</div>
			</div>
			<div class="footer-col-4">
			<div class="social">
			<h4>Download App</h4>
				<img src="../img/background/app.jpg">
	
		</div>
			
		</div>	
		
		</div>
		</div>
	</div>
	</div>	
</body>
</html>
<?php
				 if(isset($_POST["btnsubmit"])){
					 
				  $username = $_POST["txtusername"];
			      $password = $_POST["txtpassword"];
					 
					 $con = mysqli_connect("localhost","root","","ecodb");
					     if(!$con)
						 {
							 die("Sorry, we are facing a technical issue");
						 }
					 $sql = "SELECT * FROM `tbllogin` WHERE `username`='".$username."' AND `password`='".$password."';";
					 $results = mysqli_query($con,$sql) ;
					 
					 if(mysqli_num_rows($results)>0)
				 {
					 $_SESSION["username"] = $username;
					 header('Location:product.php');
					 }
					 
					 if(($username == "test@gmail.com")&& ($password == "test123"));
				 else{
					 
					echo "please enter a correct username and a password";
					  }
			}
?>