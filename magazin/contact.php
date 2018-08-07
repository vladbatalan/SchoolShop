<html>
	<?php
		include 'include/connection.php';
	?>
<head>
	<title> magazinonline.com </title>
	<link rel='stylesheet' href='css/main.css'>
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script src='scripts/map.js'></script>
</head>
<body style='background-image: url("img/background.jpg");padding-top: 40px;'>
	
	<?php
		include 'include/user-bar.php';
		include 'include/menu.php';
	?>
		
	<div class='content-contact'>
		<div id="googleMap" class='map'></div>
			<div class='info'>
				<h1>Contact</h1>
				<p><img src='img/phone.jpg'>Contacteaza-ne la numarul de telefon: 0740 112 112</p>
				<p><img src='img/email.ico'>Sau trimite-ne un email la adresa: proiect@phpinatl.org</p>
				<p><img src='img/location.png'>Vizitati-ne la adresa: Strada Nicolae Iorga 19, Botoșani, Romania</p>
			</div>
		</div>
	</div>
	
	<?php
		include 'include/footer.php';
	?>


</body>
</html>