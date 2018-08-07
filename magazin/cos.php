<html>
	<?php
		include 'include/connection.php';
		include 'include/operatii_in_cos.php';
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
	
	<div class='container'>
		<div class='content-cos'>
			<h1> Cosul meu </h1>
			<!-- Realizam pentru fiecare obiect detinut de catre utilizator in cos sa fie afisat -->
			<!-- obiectele vor fi puse intr un div de clasa 'obiect' imaginea in div de clasa 'imagine-obiect' si descrierea in div de clasa 'descriere-obiect' -->
			<!-- total in div de clasa 'total' -->
			<?php
				if(isset($_SESSION['id']))
				{
					$sql = "SELECT * FROM cos WHERE id_user = '".$_SESSION['id']."' AND comanda = '0'";
					
					$result = mysqli_query($conn, $sql);
					$pret_total = 0;
					while($row = mysqli_fetch_assoc($result)){
						$sql = "SELECT * FROM produse WHERE id = '".$row['id_produs']."'";
						$res = mysqli_query($conn, $sql);
						$produs = mysqli_fetch_assoc($res);
						
						$pret_total += $produs['pret']*$row['stoc'];
						echo "<div class='obiect'>
							<div class='imagine-obiect'>
								<img src='img/".$produs['imagine']."'> 
							</div>
							<div class='descriere-obiect'>
								<h2>".$produs['nume']." </h2>
								<p>Stoc: ".$row['stoc']." </p>
								<p>Pret(buc): ".$produs['pret']."</p>
								<p>Pret achizitie :".($produs['pret']*$row['stoc'])."
								<form action='cos.php?delete=".$produs['id']."' method='post'>
									<input type='submit' name='sterge' value='Sterge obiect'> 
								</form>
							</div>
							
						</div>";
					}
					
					echo "<div class='total'>
						<h4>Pret comanda: ".$pret_total."</h4>
						<form action='cos.php' method='post'>
							<input type='submit' name='comanda' value='Finiseaza comanda!'>
						</form>
					</div>";
					
				}
			?>
			
		</div>
	</div>
	
	<?php
		include 'include/footer.php';
	?>

</body>
</html>