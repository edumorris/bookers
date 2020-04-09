<!DOCTYPE html>
<html>
<head>
	<script src="js/functions.js"></script>
	<meta name="theme-color" content="#561302">
	<link rel="icon" href="images/icon.ico" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap integration -->
	<link rel="stylesheet" type="text/css" href="css/shop_styler.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<!--
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	-->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://kit.fontawesome.com/a097096ef6.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body onload="shopMessage()">
	<div class="top-nav-bar">

		<div class="search-box">
			<i class="fas fa-bars" id="menu-btn" onclick="openMenu()"></i>
			<i class="fas fa-times" id="close-btn" onclick="closeMenu()"></i>
			<img src="images/company_logo.png" class="logo">
			<input type="text" class="form-control" name="">
			<span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
		</div>

		<div class="menu-bar">
			<nav>
				<ul>
					<li><a href="#">Cart<i class="fas fa-shopping-cart"></i></a></li>
					<li><a href="#">Sign Up<i class="fas fa-user-plus"></i></a></li>
					<li><a href="#">Login<i class="fas fa-sign-in-alt"></i></a></li>
					<li><a href="index.php">Home<i class="fas fa-home"></i></a></li>
				</ul>
			</nav>
		</div>

	</div>

	<section class="header">
		
		<div class="side-menu" id="side-menu">
			<ul>
				<li>
					<a href="#">Fiction<i class="fas fa-angle-right"></i></a>
					<ul>
						<li><a href="#">Sub-Menu-1</a></li>
						<li><a href="#">Sub-Menu-1</a></li>
						<li><a href="#">Sub-Menu-1</a></li>
						<li><a href="#">Sub-Menu-1</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Romance<i class="fas fa-angle-right"></i></a>
					<ul>
						<li><a href="#">Sub-Menu-2</a></li>
						<li><a href="#">Sub-Menu-2</a></li>
						<li><a href="#">Sub-Menu-2</a></li>
						<li><a href="#">Sub-Menu-2</a></li>
					</ul>
				</li>
				<li>
					<a href="#">True Story<i class="fas fa-angle-right"></i></a>
					<ul>
						<li><a href="#">Sub-Menu-3</a></li>
						<li><a href="#">Sub-Menu-3</a></li>
						<li><a href="#">Sub-Menu-3</a></li>
						<li><a href="#">Sub-Menu-3</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Action & Adventure<i class="fas fa-angle-right"></i></a>
					<ul>
						<li><a href="#">Sub-Menu-4</a></li>
						<li><a href="#">Sub-Menu-4</a></li>
						<li><a href="#">Sub-Menu-4</a></li>
						<li><a href="#">Sub-Menu-4</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Horror<i class="fas fa-angle-right"></i></a>
					<ul>
						<li><a href="#">Sub-Menu-5</a></li>
						<li><a href="#">Sub-Menu-5</a></li>
						<li><a href="#">Sub-Menu-5</a></li>
						<li><a href="#">Sub-Menu-5</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Detective & Mystrey<i class="fas fa-angle-right"></i></a>
					<ul>
						<li><a href="#">Sub-Menu-6</a></li>
						<li><a href="#">Sub-Menu-6</a></li>
						<li><a href="#">Sub-Menu-6</a></li>
						<li><a href="#">Sub-Menu-6</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Classics<i class="fas fa-angle-right"></i></a>
					<ul>
						<li><a href="#">Sub-Menu-7</a></li>
						<li><a href="#">Sub-Menu-7</a></li>
						<li><a href="#">Sub-Menu-7</a></li>
						<li><a href="#">Sub-Menu-7</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Historical Fiction<i class="fas fa-angle-right"></i></a>
					<ul>
						<li><a href="#">Sub-Menu-8</a></li>
						<li><a href="#">Sub-Menu-8</a></li>
						<li><a href="#">Sub-Menu-8</a></li>
						<li><a href="#">Sub-Menu-8</a></li>
					</ul>
				</li>
			</ul>
		</div>

	</section>

</body>
</html>