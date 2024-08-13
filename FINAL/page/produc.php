<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
.navbar{
	display: flex;
	align-items: center;
	padding: 20px;
}
nav{
	flex: 1;
	text-align: right;
}
nav ul{
	display: inline-block;
	list-style-type: none;
	margin: 0 20px;
	position: relative;
	
}
nav ul li{
	list-style: none;
	display: inline-block;
	margin: 0 20px;
	position: relative;
}
a{
	text-decoration: none;
	color: #555;
	
}
p{
	color: #555;
}
nav ul li::after{
			content: '';
			height:3px;
			width: 0%;
			background: #ff523b;
			position:absolute;
			left:0;
			bottom: -10px;
		}
nav ul li:hover::after{
			width:100%;
}
.container{
	max-width: 1300px;
	margin: auto;
	padding-left: 25px;
	padding-right: 25px;
}
.row{
	display: flex;
	align-items: center;
	flex-wrap: wrap;
	justify-content: space-around;
	
}
	
	</style>
</head>

<body>
	<div class="content">
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
		<div class="container">
		<h2>New Arrivals</h2>
		<div class="row">
		<div class="col-4>
		<h3>Shopping cart Date</h3>
	</div>
</body>
</html>