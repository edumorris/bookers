<head>
	<link rel="stylesheet" type="text/css" href="css/main_styler.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  				} 
  				else {
    				document.getElementById('header').style.top = "-50px";
 		 		}
 		 		prevScrollpos = currentScrollPos;
			}
				
	</script>
</head>
<?php
	require ('php/header.php');
?>
<body>

	<div id="container">

		<div id="hero">
			<div id="hero_content">
				<span>
					<h2>Bookers Paradise</h2>
					<p>Enlight Your Mind.</p>
				</span>
			</div>
		</div>

		<div id="about">

			<div id="about_content">
				<p>
					Bookers Paradise. An escape for the once that love reading. An escape for those that want knowledge. A library in the clouds. Every book you ever wanted. Every topic you thirst for. If we don't have it, we shall get it for you in the shortest time possible.
				</p>
				<p>
					We pride ourselves in getting exclusive releases for books the world over. Our books catalog is unmatched anywhere in the world.
				</p>
				<p>
					We have partnerships with different universities, printing presses and companies to provide library services in the most remote of areas
				</p>
			</div>
			
			<div id="about_cards">

				<div class="cards_about" id="cards_about_1">
					<p>Library Services</p>
					<button>VIEW</button>
				</div>

				<div class="cards_about" id="cards_about_2">
					<p>Bookshop</p>
					<button>VIEW</button>
				</div>

				<div class="cards_about" id="cards_about_3">
					<p>Research & Development</p>
					<button>VIEW</button>
				</div>

			</div>
		</div>

		<div id="history">
			<ul>
				<li><strong>2005</strong> - Established as a local library</li>
				<li><strong>2007</strong> - </li>
			</ul>
		</div>

	</div>
</body>
<?php 
	require ('php/footer.php')
?>