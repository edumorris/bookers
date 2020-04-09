<head>
	<link rel="stylesheet" type="text/css" href="css/main_styler.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="./js/functions.js"></script>
</head>
<?php
require('php/header.php');
?>

<body>

	<div id="container">

		<div id="hero">
			<div id="hero_content">
				<span>
					<h2>Bookers Paradise</h2>
					<p>Enlight Your Mind.</p>
				</span>

				<div id="buy_button">
					<a href="#">
						<button>BUY</button>
					</a>
				</div>
				
			</div>
		</div>

		<div id="about">

			<h2>ABOUT US</h2>

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
					<button class="details_button" onclick="libraryButton()">VIEW</button>
				</div>

				<div class="cards_about" id="cards_about_2">
					<p>Bookshop</p>
					<button class="details_button">VIEW</button>
				</div>

				<div class="cards_about" id="cards_about_3">
					<p>R&D</p>
					<button class="details_button">VIEW</button>
				</div>

			</div>
		</div>

		<div id="history">

			<h2>OUR HISTORY</h2>

			<ul>
				<li><strong>2005</strong> <br> &nbsp;&nbsp;&nbsp;&nbsp; Established as a local library.</li>
				<li><strong>2007</strong> <br> &nbsp;&nbsp;&nbsp;&nbsp; Re-establsshed as bothan online books platform and opened 2 more libraries.</li>
				<li><strong>2009</strong> <br> &nbsp;&nbsp;&nbsp;&nbsp; Established our mobile library units to cover larger and more remote areas.</li>
				<li><strong>2010</strong> <br> &nbsp;&nbsp;&nbsp;&nbsp; Partnered with <a href="#"><strong>Big Shot Publishers</strong></a>to be their online outlet for their published books.</li>
				<li><strong>2011</strong> <br> &nbsp;&nbsp;&nbsp;&nbsp; Established Bookers University.</li>
				<li><strong>2013</strong> <br> &nbsp;&nbsp;&nbsp;&nbsp; Established Bookers University's <strong>Research & Develpment Section</strong> to take part in the research and develpment in Science, Mathematics and Arts.</li>
			</ul>
		</div>

	</div>
</body>
<?php
require('php/footer.php')
?>