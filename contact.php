<head>
	<link rel="stylesheet" type="text/css" href="css/contact_styler.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="./js/functions.js"></script>
</head>

<?php
require('php/header.php');
?>

<body>
	<div id="container">

		<div id="contact_details">
			<div class="cds" id="co_name">
				BOOKERS.Co
			</div>
			<div class="cds" id="tel">
				0800-BOOKERS-Co
			</div>
			<div class="cds" id="our_email">
				info@bookers.lib
			</div>
		</div>

		<div id="map">
			<iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Booker&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
		</div>

		<div id="contact_form">
			<form method="post" action="js/contact.js">
				<h2>Inquiry</h2>
				<table>
					<tbody>
						<tr>
							<td><label for="customers_name">Your Name:</label></td>
							<td><input type="text" name="name" id="customers_name" placeholder="Enter your full name." required></td>
						</tr>
						<tr>
							<td><label for="customers_phone_number">Phone Number:</label></td>
							<td><input type="number" name="phone_number" id="customers_phone_number" placeholder="Enter your phone number."></td>
						</tr>
						<tr>
							<td><label for="customers_email">Email:</label></td>
							<td><input type="email" name="email" id="customers_email" placeholder="Enter your email address." required></td>
						</tr>
						<tr>
							<td><label for="message_subject">Subject:</label></td>
							<td><input type="text" name="subject" id="message_subject" placeholder="Inquiry subject." required></td>
						</tr>
						<tr style="margin-top: 20px">
							<td></td>
							<td style="display: flex; flex-direction: column;">
								<label for="message" style="margin: 20px 0 5px 0;">Message:</label>
								<textarea id="message" rows="10" cols="50" placeholder="Enter your message or inquiry here." required></textarea>
							</td>
						</tr>
						<tr>
							<td colspan="2" style="text-align: center;"><input type="submit" name="submit"></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>

	</div>
</body>

<?php
require('php/footer.php');
?>