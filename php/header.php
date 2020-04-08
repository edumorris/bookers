<!DOCTYPE html>
<html>

<head>
	<title>Bookers Paradise</title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="icon" href="images/icon.ico" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#100000">
	<!--<script src="https://kit.fontawesome.com/a097096ef6.js" crossorigin="anonymous"></script>-->
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript">
		//Hide header on load
		/*window.onload = function() {
  			document.getElementById('header').style.display = 'none';
		};*/

		//Show header on scroll up
		var prevScrollpos = window.pageYOffset;

		window.onscroll = function() {
			var currentScrollPos = window.pageYOffset;

			if (prevScrollpos > currentScrollPos) {
				document.getElementById('header').style.top = "0";
			} else {
				document.getElementById('header').style.top = "-50px";
			}
			prevScrollpos = currentScrollPos;
		}
	</script>
</head>

<header id="header">

	<div id="logo">
		<a href="#">
			<img src="images/company_logo.png">
		</a>
	</div>

	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="#about">About</a></li>
			<li><a href="#history">History</a></li>
			<!-- Added -->
			<li><a href="contact.php">Contact</a></li>
			<li>
				<!-- Tranfered 
				<div id="buy_button">
					<a href="#">
						<button>BUY</button>
					</a>
				</div>
				-->
			</li>
		</ul>
	</nav>

</header>