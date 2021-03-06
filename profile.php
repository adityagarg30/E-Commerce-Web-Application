<?php

	session_start();

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

<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
</head>
<body>
	
	<div class="header">
		<div class="header-top-strip">
			<div class="container">
				<div class="header-top-left">
					<ul>
						                        
                        <?php if($_SESSION['name'] == ''){ ?>
						<li><a href="account.php"><span class="glyphicon glyphicon-user"> </span>Login</a></li>
						<li><a href="register.php"><span class="glyphicon glyphicon-lock"> </span>Create an Account</a></li>	
                        <?php }else{ ?>
                        <li><a href="index.html"><span class="glyphicon glyphicon-user"> </span>Logout</a></li>		
                        <?php } ?>			
					</ul>
				</div>
				<div class="header-right">
						<div class="cart box_1">
                        
                        <h3><img style="height:20px; width:20px" src="images/icon1.png" alt=""></h3>
								<p><a class="simpleCart_empty"> <?php echo $_SESSION['name']; ?></a></p>
						
                        	<a href="checkout.php">
								<h3><img src="images/bag.png" alt=""></h3>
							</a>	
							<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
							<div class="clearfix"> </div>
						</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
			<div class="banner-top">
		<div class="container">
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
	<div class="banner">
		<div class="container">
<div class="banner-bottom">
	<div class="banner-bottom-left">
		<!--<h2>B<br>U<br>Y</h2>-->
	</div>
	<div class="banner-bottom-right">
		<div  class="callbacks_container">
					
					</div>
					
	  			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    
			    $(function () {
			     
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager:true,
			        nav:false,
			        speed: 1000,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
	</div>
	<div class="clearfix"> </div>
</div>
	<div class="shop">
		<a href="single.html">SHOP COLLECTION NOW</a>
	</div>
	</div>
		</div>
		

		<div class="container">
			<div class="main-content">
				<div class="online-strip">
					<div class="col-md-4 follow-us">
						<h3>follow us : <a class="twitter" href="https://twitter.com/login" target="_blank"></a><a class="facebook" href="https://www.facebook.com/" target="_blank"></a></h3>
					</div>
					<div class="col-md-4 shipping-grid">
						<div class="shipping">
							<img src="images/shipping.png" alt="" />
						</div>
						<div class="shipping-text">
							<h3>Free Shipping</h3>
							<p>on orders over Rs.500</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 online-order">
						<p>Order online</p>
						<h3>Tel:980 504 9165</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="products-grid">
				<header>
					<h3 class="head text-center">Latest Products</h3>
				</header>
					<div class="col-md-4 product simpleCart_shelfItem text-center">
						<a href="single1.html"><img src="image/A1.jpg" alt="" /></a>
						<div class="mask">
							<a href="single1.html">Quick View</a>
						</div>
						<a class="product_name" href="single1.html">Fastrack NF3098SM0 Watch</a>
						<p><a class="item_add" href="#"><i></i> <span class="item_price">Rs.4000</span></a></p>
					</div>
					<div class="col-md-4 product simpleCart_shelfItem text-center">
						<a href="single2.html"><img src="image/B1.jpg" alt="" /></a>
						<div class="mask">
							<a href="single2.html">Quick View</a>
						</div>
						<a class="product_name" href="single2.html">At499 Polyester Mini Dress</a>
						<p><a class="item_add" href="#"><i></i> <span class="item_price">Rs.3000</span></a></p>
					</div>
					<div class="col-md-4 product simpleCart_shelfItem text-center">
						<a href="single3.html"><img src="image/C1.jpg" alt="" /></a>
						<div class="mask">
							<a href="single3.html">Quick View</a>
						</div>
						<a class="product_name" href="single3.html">Tinted Black Hooded Sweater</a>
						<p><a class="item_add" href="#"><i></i> <span class="item_price">Rs.3000</span></a></p>
					</div>
					<div class="col-md-4 product simpleCart_shelfItem text-center">
						<a href="single4.html"><img src="image/D1.jpg" alt="" /></a>
						<div class="mask">
							<a href="single4.html">Quick View</a>
						</div>
						<a class="product_name" href="single4.html">Nike Black Polyester Backpack</a>
						<p><a class="item_add" href="#"><i></i> <span class="item_price">Rs.2000</span></a></p>
					</div>
					<div class="col-md-4 product simpleCart_shelfItem text-center">
						<a href="single5.html"><img src="image/E1.jpg" alt="" /></a>
						<div class="mask">
							<a href="single5.html">Quick View</a>
						</div>
						<a class="product_name" href="single5.html">Jade Black Faux Leather Flat Sandal</a>
						<p><a class="item_add" href="#"><i></i> <span class="item_price">Rs.2000</span></a></p>
					</div>
					<div class="col-md-4 product simpleCart_shelfItem text-center">
						<a href="single6.html"><img src="image/F1.jpg" alt="" /></a>
						<div class="mask">
							<a href="single6.html">Quick View</a>
						</div>
						<a class="product_name" href="single6.html">Puma Drongos Black Casual Shoes</a>
						<p><a class="item_add" href="#"><i></i> <span class="item_price">Rs.3000</span></a></p>
					</div>
					<div class="col-md-4 product simpleCart_shelfItem text-center">
						<a href="single7.html"><img src="image/G1.jpg" alt="" /></a>
						<div class="mask">
							<a href="single7.html">Quick View</a>
						</div>
						<a class="product_name" href="single7.html">Kesar Georgette Saree</a>
						<p><a class="item_add" href="#"><i></i> <span class="item_price">Rs.2000</span></a></p>
					</div>
					<div class="col-md-4 product simpleCart_shelfItem text-center">
						<a href="single8.html"><img src="image/H1.jpg" alt="" /></a>
						<div class="mask">
							<a href="single8.html">Quick View</a>
						</div>
						<a class="product_name" href="single8.html">Highlander Black Slim Trouser</a>
						<p><a class="item_add" href="#"><i></i> <span class="item_price">Rs.3000</span></a></p>
					</div>
					<div class="col-md-4 product simpleCart_shelfItem text-center">
						<a href="single9.html"><img src="image/I1.jpg" alt="" /></a>
						<div class="mask">
							<a href="single9.html">Quick View</a>
						</div>
						<a class="product_name" href="single9.html">Puma Black Leather Belt</a>
						<p><a class="item_add" href="#"><i></i> <span class="item_price">Rs.2000</span></a></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>

		</div>
		<div class="other-products">
		<div class="container">
			<h3 class="like text-center">Featured Collection</h3>        			
				     <ul id="flexiselDemo3">
						<li><img src="imag/N1.jpg" class="img-responsive" alt="" />
							<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" >Black Party Blazers</a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">Rs.1000</span></a></p>
							</div>
						</li>
						<li><img src="imag/N2.jpg" class="img-responsive" alt="" />				
							<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" >Sutra Gray Jackets</a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">Rs.1800</span></a></p>
							</div>
						</li>
						<li><img src="imag/N4.jpg" class="img-responsive" alt="" />
							<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" >Nike Blue Sneaker</a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">Rs.1200</span></a></p>
							</div>
						</li>
						<li><img src="imag/N6.jpg" class="img-responsive" alt="" />
							<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" >Catwalk Silver Heeled</a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">Rs.1500</span></a></p>
							</div>
						</li>
						<li><img src="imag/N8.jpg" class="img-responsive" alt="" />
							<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" >Victorinox Watch</a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">Rs.2000</span></a></p>
							</div>
						</li>
                        <li><img src="imag/N3.jpg" class="img-responsive" alt="" />
							<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" >White Cotton Hooded</a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">Rs.1400</span></a></p>
							</div>
						</li>
                        <li><img src="imag/N5.jpg" class="img-responsive" alt="" />
							<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" >Nike Sneakers Blue</a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">Rs.1000</span></a></p>
							</div>
						</li>
                        <li><img src="imag/N7.jpg" class="img-responsive" alt="" />
							<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" >Catwalk Black Heeled</a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">Rs.1500</span></a></p>
							</div>
						</li>
                        <li><img src="imag/N9.jpg" class="img-responsive" alt="" />
							<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" >Georgette Suit</a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">Rs.1700</span></a></p>
							</div>
						</li>
                        <li><img src="imag/N10.jpg" class="img-responsive" alt="" />
							<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" >Leather Biker Jackets</a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">Rs.1300</span></a></p>
							</div>
						</li>
				     </ul>
				    <script type="text/javascript">
					 $(window).load(function() {
						$("#flexiselDemo3").flexisel({
							visibleItems: 5,
							animationSpeed: 2000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
					    	responsiveBreakpoints: { 
					    		portrait: { 
					    			changePoint:480,
					    			visibleItems: 1
					    		}, 
					    		landscape: { 
					    			changePoint:640,
					    			visibleItems: 2
					    		},
					    		tablet: { 
					    			changePoint:768,
					    			visibleItems: 3
					    		}
					    	}
					    });
					    
					});
				   </script>
				   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
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