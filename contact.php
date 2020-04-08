<head>
	<link rel="stylesheet" type="text/css" href="css/contact_styler.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="./js/functions.js"></script>
</head>

<?php
	require ('php/header.php');
?>

<body>
	<div id="container">
		<h2>Contact Us</h2>

		<div id="contact_form">
			<form>
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
		
		<!--
		<div id="map">
			<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDqJLOawtDtHt2SkwMHLzZIDlMt-FUG_SY'></script><div style='overflow:hidden;height:500px;width:600px;'><div id='gmap_canvas' style='height:500px;width:600px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://add-map.com/'>google map for my website</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=d622c7e752aaedc272bae93f57547fe9fdfbe535'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(41.31,-72.92),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(41.31,-72.92)});infowindow = new google.maps.InfoWindow({content:'<strong>Bookers HQ</strong><br><br> <br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
		</div>
	-->
	</div>
</body>

<?php 
	require ('php/footer.php');
?>