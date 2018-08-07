<html>
	<?php
		include 'include/connection.php';
	?>
<head>
	<title> magazinonline.com </title>
	<link rel='stylesheet' href='css/main.css'>
</head>
<body style='background-image: url("img/background.jpg");'>

	<?php
		include 'include/user-bar.php';
	?>
	
	<div class='container'>
	
		<?php
			include 'include/menu.php';
		?>
		
		<div class='left-bar'> 
			<div class='category-header'>CATEGORII</div>
			<ul>	
				<li><a href='produse.php?categorie=birotica'>Produse de birotica</a></li>
				<li><a href='produse.php?categorie=caiete'>Caiete</a></li>
				<li><a href='produse.php?categorie=rigle'>Rigle</a></li>
				<li><a href='produse.php?categorie=penare'>Penare si ghiozdane</a></li>
				<li><a href='produse.php?categorie=hartie'>Hartie si etichete</a></li>
			</ul>
		</div>
		
		<div class='content-produse'>	
			<div class='search'>
				<!-- initiem un modul de cautare pentru obiecte -->
				<form action="produse.php" method="post">
					<input type='text' name='search' placeholder="Cauta obiecte">
				</form>
				
			</div>
			<!-- afisare produs intr-un div de clasa imagine-produs -->
			<?php
				$sql = "SELECT * FROM produse";
				if(isset($_GET['categorie']))
				{
					$sql .= " WHERE categorie = '".$_GET['categorie']."'";
				}
				if(isset($_POST['search']))
				{
					$sql .= " WHERE nume LIKE '%".$_POST['search']."%' OR 
					descriere LIKE '%".$_POST['search']."%'";
				}
				//executam cerinta
				$result = mysqli_query($conn, $sql);
				//afisare
				while($row = mysqli_fetch_assoc($result))
				{
					echo "<div class='imagine-produs'>
						<a href='item.php?id=".$row['id']."' target='_blank'>
							<img src='img/".$row["imagine"]."'>
							<p>". $row['nume'] ."</p>
							<p>Pret: ". $row['pret'] ." Stoc: ".$row['stoc']." </p>
						</a>
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