<?php
	$conn = mysql_connect('127.0.0.1','root','');
	mysql_select_db('e-shop',$conn);
	if(isset($_POST['submit']))
	{
		$fname = $_POST['FName'];
		$lname = $_POST['LName'];
		$email = $_POST['Email'];
		$password = $_POST['Password'];
		$rpassword = $_POST['Rpassword'];
		$mobile = $_POST['MNumber'];
		$sql = "insert into login values('$fname','$lname','$email','$password','$rpassword','$mobile')";
		mysql_query($sql);
	}
	
?>
<!doctype html>
<html>
<head>
<title>E-Commerce Website</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

<script src="js/jquery.min.js"></script>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Eshop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

	<script src="js/simpleCart.min.js"> </script>
    <script type="text/javascript">
function myf()
{
	
	var x=document.forms['resume']['MNumber'].value.length;
	if(x!=10)
	{
		alert("Enter a 10 digit Mobile Number");
	}
	
	var y=document.forms['resume']['Password'].value;
	z=y.length;
  var pattern =/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/ 
		if (z<8)
	{
		alert("password should not be less than 8 characters");
	}
	else if(y!=y.match(pattern))
	{
		alert("it should have a numeric and one special character also");	
	}  
	
}
</script>

<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
</head>
<body>
	
	<div class="header">
		<div class="header-top-strip">
			<div class="container">
				<div class="header-top-left">
					<ul>
						<li><a href="account.php"><span class="glyphicon glyphicon-user"> </span>Login</a></li>
						<li><a href="register.php"><span class="glyphicon glyphicon-lock"> </span>Create an Account</a></li>			
					</ul>
				</div>
				<div class="header-right">
						<div class="cart box_1">
							<a href="checkout.php">
								<h3> <img src="images/bag.png" alt=""></h3>
							</a>	
							<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
							<div class="clearfix"> </div>
						</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
	<div class="inner-banner">
		<div class="container">
			<div class="banner-top inner-head">
				<nav class="navbar navbar-default" role="navigation">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
				<div class="logo">
					<h1><a href="index.html"><span>E</span> -Shop</a></h1>
				</div>
	    </div>
	   
	
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	        <ul class="nav navbar-nav">
			<li><a href="index.html">Home</a></li>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-3">
			            <div class="row">
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>NEW IN</h6>
						            <li><a href="products.php">New In Clothing</a></li>
						            <li><a href="#">New In Bags</a></li>
						            <li><a href="products1.php">New In Shoes</a></li>
						            <li><a href="#">New In Watches</a></li>
						            <li><a href="#">New In Grooming</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>CLOTHING</h6>
						            <li><a href="#">Polos & Tees</a></li>
						            <li><a href="products2.php">Casual Shirts</a></li>
						            <li><a href="#">Casual Trousers</a></li>
						            <li><a href="products3.php">Jeans</a></li>
						            <li><a href="#">Track Wear</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>WATCHES</h6>
						            <li><a href="#">Analog</a></li>
						            <li><a href="products4.php">Chronograph</a></li>
						            <li><a href="#">Digital</a></li>
						            <li><a href="#">Watch Cases</a></li>
					            </ul>
				            </div>
							<div class="clearfix"></div>
			            </div>
		            </ul>
		        </li>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">women <b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-3">
			            <div class="row">
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>NEW IN</h6>
						            <li><a href="products5.php">New In Clothing</a></li>
						            <li><a href="#">New In Bags</a></li>
						            <li><a href="products6.php">New In Shoes</a></li>
						            <li><a href="#">New In Watches</a></li>
						            <li><a href="#">New In Beauty</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>CLOTHING</h6>
						            <li><a href="#">Polos & Tees</a></li>
						            <li><a href="products7.php">Casual Shirts</a></li>
						            <li><a href="#">Casual Trousers</a></li>
						            <li><a href="products8.php">Jeans</a></li>
						            <li><a href="#">Track Wear</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>WATCHES</h6>
						            <li><a href="#">Analog</a></li>
						            <li><a href="products9.php">Chronograph</a></li>
						            <li><a href="#">Digital</a></li>
						            <li><a href="#">Watch Cases</a></li>
					            </ul>
				            </div>
							<div class="clearfix"></div>
			            </div>
		            </ul>
		        </li>
		        <li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">kids <b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-2">
			            <div class="row">
				            <div class="col-sm-6">
					            <ul class="multi-column-dropdown">
									<h6>NEW IN</h6>
						            <li><a href="products10.php">New In Boys Clothing</a></li>
						            <li><a href="products11.php">New In Girls Clothing</a></li>
						            <li><a href="#">New In Boys Shoes</a></li>
						            <li><a href="#">New In Girls Shoes</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-6">
					             <ul class="multi-column-dropdown">
									<h6>ACCESSORIES</h6>
						            <li><a href="products12.php">Bags</a></li>
						            <li><a href="#">Watches</a></li>
						            <li><a href="#">Sun Glasses</a></li>
						            <li><a href="#">Jewellery</a></li>
					            </ul>
				            </div>
							<div class="clearfix"></div>
			            </div>
		            </ul>
		        </li>
					
					<li><a href="contact.html">CONTACT</a></li>
	        </ul>
	    </div>
	  
	</nav>
	
</div>
	</div>
		</div>
		
<div class="registration-form">
	<div class="container">
	<div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.html" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                       Registration
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.html">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
		<h2>Registration</h2>
		<div class="registration-grids">
			<div class="reg-form">
				<div class="reg">
					 <p>Welcome, please enter the following details to continue.</p>
					 <p>If you have previously registered with us, <a href="account.php">click here</a></p>
					 
                     
                                                 <form action="register.php" method="post" name="resume" onsubmit="return myf()">
                                                     <ul>
                                                         <li class="text-info">First Name: </li>
                                                         <li><input type="text" name="FName" value=""></li>
                                                     </ul>
                                                     <ul>
                                                         <li class="text-info">Last Name: </li>
                                                         <li><input type="text" name="LName" value=""></li>
                                                     </ul>				 
                                                    <ul>
                                                         <li class="text-info">Email: </li>
                                                         <li><input type="text" name="Email" value=""></li>
                                                     </ul>
                                                     <ul>
                                                         <li class="text-info">Password: </li>
                                                         <li><input type="password" name="Password" value=""></li>
                                                     </ul>
                                                     <ul>
                                                         <li class="text-info">Re-enter Password:</li>
                                                         <li><input type="password" name="Rpassword" value=""></li>
                                                     </ul>
                                                     <ul>
                                                         <li class="text-info">Mobile Number:</li>
                                                         <li><input type="text" name="MNumber" value=""></li>
                                                     </ul>						
                                                     <input type="submit" name="submit" value="REGISTER NOW">
                                                     
                                                     <p class="click">By clicking this button, you are agree to my <a href="#">Policy Terms and Conditions.</a></p> 
                                                 </form>
				 
                 
                 </div>
			</div>
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>


		<div class="news-letter">
			<div class="container">
				<div class="join">
					<h6>JOIN OUR MAILING LIST</h6>
					<div class="sub-left-right">
						<form>
							<input type="text" value="Enter Your Email Here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email Here';}" />
							<input type="submit" value="SUBSCRIBE" />
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="footer">
		<div class="container">
		 <div class="footer_top">
			<div class="span_of_4">
				<div class="col-md-3 span1_of_4">
					<h4>Shop</h4>
					<ul class="f_nav">
						<li><a href="#">new arrivals</a></li>
						<li><a href="#">men</a></li>
						<li><a href="#">women</a></li>
						<li><a href="#">accessories</a></li>
						<li><a href="#">kids</a></li>
						<li><a href="#">brands</a></li>
						<li><a href="#">trends</a></li>
						<li><a href="#">sale</a></li>
						<li><a href="#">style videos</a></li>
					</ul>	
				</div>
				<div class="col-md-3 span1_of_4">
					<h4>help</h4>
					<ul class="f_nav">
						<li><a href="#">frequently asked  questions</a></li>
						<li><a href="#">men</a></li>
						<li><a href="#">women</a></li>
						<li><a href="#">accessories</a></li>
						<li><a href="#">kids</a></li>
						<li><a href="#">brands</a></li>
					</ul>	
				</div>
				<div class="col-md-3 span1_of_4">
					<h4>account</h4>
					<ul class="f_nav">
						<li><a href="account.php"><u>login</u></a></li>
						<li><a href="register.php"><u>create an account</u></a></li>
						<li><a href="#">create wishlist</a></li>
						<li><a href="checkout.php"><u>my shopping bag</u></a></li>
						<li><a href="#">brands</a></li>
						<li><a href="#">create wishlist</a></li>
					</ul>				
				</div>
				<div class="col-md-3 span1_of_4">
					<h4>popular</h4>
					<ul class="f_nav">
						<li><a href="#">new arrivals</a></li>
						<li><a href="#">men</a></li>
						<li><a href="#">women</a></li>
						<li><a href="#">accessories</a></li>
						<li><a href="#">kids</a></li>
						<li><a href="#">brands</a></li>
						<li><a href="#">trends</a></li>
						<li><a href="#">sale</a></li>
						<li><a href="#">style videos</a></li>
						<li><a href="#">login</a></li>
						<li><a href="#">brands</a></li>
					</ul>			
				</div>
				<div class="clearfix"></div>
				</div>
		  </div>
		  <div class="cards text-center">
				<img src="images/cards.jpg" alt="" />
		  </div>
		  
		</div>
		</div>
</body>
</html>