<!DOCTYPE html>
<html>
<head>
<title>Home</title>
 
<meta charset="UTF-8">
<link href="{{asset('frontend')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('frontend')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('frontend')}}/css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<link rel="stylesheet" href="{{asset('frontend')}}/css/flexslider.css" type="text/css" media="screen" property="" />
<script src="{{asset('frontend')}}/js/jquery-1.11.1.min.js"></script>
<script defer src="{{asset('frontend')}}/js/jquery.flexslider.js"></script>
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('frontend')}}/js/move-top.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/js/easing.js"></script>
<script type="application/x-javascript" src="{{asset('frontend')}}/js/js.js"> </script>
<!-- end-smoth-scrolling -->



</head>
	
<body>
<!-- header -->
	<div class="agileits_header">
		<div class="w3l_offers">
			<a href="/poweroffer">Power's Special Offers!</a>
		</div>
		<div class="product_list_header">  
			<form action="#" method="post" class="last">
                <fieldset>
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <input type="submit" name="submit" value="View your cart" class="button" />
                </fieldset>
            </form>
		</div>
			<div class="w3l_header_right">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="price_range">
							<ul class="dropdown-menu drp-mnu">
								<li><a href="/SignIn&SignUp">Login</a></li>
								<li><a href="/SignIn&SignUp">Sign Up</a></li>
							</ul>
						</div>                  
					</div>	
				</li>
			</ul>
		</div>
		<div class="clearfix">
				<div class="w3l_search">
					<form action="#" method="post">
					<input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
					<input type="submit" value=" ">
					</form>
				</div> 
			</div>
		<div class="clearfix"> </div>
	</div>

	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<!-- <h1><a href="Home.html"><span>power</span> shop</a></h1> -->
				<img src="{{asset('frontend')}}/images/logo.jpg">
			</div>
			
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>+88 01521112746</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:powershop@gmail.com">powershop@gmail.com</a></li>
				</ul>
			</div>
			
		</div>
	</div>
<!-- //header -->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="/">Home</a><span>|</span></li>
				<li>Home</li>
			</ul>
		</div>
	</div>

<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div>
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<li><a href="/brandedpowerbanks">Branded Powerbanks</a></li>
						<li class="dropdown mega-dropdown active">
							<a href="/pricerange" class="dropdown-toggle" data-toggle="dropdown">Price range<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu price_range_menu">
								<div class="price_range">
									<ul>
										<li><a href="/pricerange1">500-1000</a></li>
										<li><a href="/pricerange2">1000-2500</a></li>
										<li><a href="/pricerange3">2500-4000</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li><a href="/BestSellingProducts">Best Selling Products</a></li>
						<li class="dropdown">
							<a href="/colors" class="dropdown-toggle" data-toggle="dropdown">Colors<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu price_range_menu">
								<div class="price_range">
									<ul>
										<li><a href="/redcolors">Red</a></li>
										<li><a href="/whitecolors">White</a></li>
										<li><a href="/blackcolors">Black</a></li>
										<li><a href="/bluecolors">Blue</a></li>
									</ul>
								</div>
							</div>
						</li>

					</ul>
				 </div>
			</nav>
            <!-- /.navbar-collapse -->
		</div>
        <!-- home body  -->

    @yield('content')
    @yield('brand')
    @yield('price')
    @yield('pricerange1')
    @yield('pricerange2')
    @yield('pricerange3')
    @yield('bestContent')
    @yield('colorContent')
    @yield('colorContent1')
    @yield('colorContent2')
    @yield('colorContent3')
    @yield('colorContent4')
    @yield('offerContent')
    @yield('aboutContent')
    @yield('serviceContent')
    @yield('privacy')
    @yield('logContent')




    <!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 w3_footer_grid">
				<h3>information</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="/about">About Us</a></li>
					<li><a href="/services">Services</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>policy info</h3>
				<ul class="w3_footer_grid_list">
					
					<li><a href="/privacy">privacy policy</a></li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
			<div class="agile_footer_grids">
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h4>100% secure payments</h4>
						<img src="{{asset('frontend')}}/images/card.png" alt=" " class="img-responsive" />
					</div>
				</div>
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h5>connect with us</h5>
						<ul class="agileits_social_icons">
							<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<!-- <div class="clearfix"> </div> -->
			</div>
			
		</div>
	</div>
<!-- //footer -->



	<script type="text/javascript" src="{{asset('frontend')}}/js/js.js"></script>


</body>
</html>


