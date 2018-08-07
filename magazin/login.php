<html>
	<?php
		include 'include/connection.php';
		include 'include/control_login.php';
	?>
<head>
	<title> magazinonline.com </title>
	<link rel='stylesheet' href='css/main.css'>
</head>

<body style='background-image: url("img/background.jpg");padding-top: 40px;'>
	
	<?php
		include 'include/user-bar.php';
		include 'include/menu.php';
	?>
	
	<div class='container-login'>
		
		<div class='login'>
			<?php 
				if(isset($login))
					echo $login;
			?>
			<h1> Autentifica-te </h1>
			<div class='form'>
				<!-- formular de login -->
				<form action='' method='post'>
					<p>email: <input type='email' name='email'></p>
					<p>parola: <input type='password' name='parola'></p>
					<input type='submit' name='login' value="Autentifica-te">
				</form>
				
			</div>
			
		</div>
		
		<div class='sign-up'>
			<?php
				if(isset($signup))
					echo $signup;
			?>
			
			<h1> Creaza un nou cont </h1>
			<div class='form'>
				<!-- formular de inregistrare -->
				<form action='' method='post'>
					<p>email: <input type='email' name='email'> </p>
					<p>parola: <input type='password' name='parola'> </p>
					<p>judet: <input type='text' name='judet'> </p>
					<p>localitate: <input type='text' name='localitate'> </p>
					<p>adresa: <input type='text' name='adresa'> </p>
					<p>telefon: <input type='text' name='telefon'> </p>
					<input type='submit' name='signup' value='Inregistreaza-te!'>
				</form>
				
			</div>
		</div>
		
	</div>
	<?php
		include 'include/footer.php';
	?>


</body>
</html>