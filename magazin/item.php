<html>
	<?php
		include 'include/connection.php';
		include 'include/control_cos.php';
	?>
<head>
	<title> magazinonline.com </title>
	<link rel='stylesheet' href='css/main.css'>
	<script>
		// acest script calculeaza totalul comenzii
		function get_number(){
			var $valoare = document.getElementById('numar').value;
			var $pret = document.getElementById('pret').value;
			var $total = $pret * $valoare;
			document.getElementById("total").innerHTML = "Pret total achizitie: "+ $total +" lei";
		}
	</script>
	
</head>

<body style='background-image: url("img/background.jpg");'>

	
	<?php
		include 'include/user-bar.php';
	?>
	
	
	<div class='container-item'>
		<!-- afisare obiect, imagine in div de clasa 'image' -->
		<?php
			if(isset($_GET['id']))
			{
				$sql = "SELECT * FROM produse WHERE id = '".$_GET['id']."'";
				$result = mysqli_query($conn, $sql);
				
				if(mysqli_num_rows($result) == 1)
				{
					$row = mysqli_fetch_assoc($result);
					
					echo "
						<div class='image'>
							<img src='img/".$row['imagine']."'>
						</div>";
						
					if(isset($done))
						echo $done;
						
					echo "	<div class='content-item'>
							<h3>".$row['nume']."</h3>
							<p> Descriere obiect: ".$row['descriere']."</p>
							<p> Pret: ".$row['pret']."</p>
							<p> Stoc: ".$row['stoc']."</p>
							
							<form action='item.php?id=".$_GET['id']."' method='post'>
								<input type='number' min=1 max=".$row['stoc']." name='numar'>
								<input type='submit' name='submit' value='Adauga in cos'>
							</form>
							
						</div>
					";
				}
				
				
			}
		?>
	</div>
	
	<?php
		include 'include/footer.php';
	?>




</body>
</html>