<?php
	if(isset($_POST['submit']))
	{
		if($_POST['numar'] != '' && isset($_GET['id']) && isset($_SESSION['id']))
		{
			$sql = "INSERT INTO `cos` (`id_produs`, `id_user`, `stoc`, `comanda`) 
			VALUES ('".$_GET['id']."', '".$_SESSION['id']."', '".$_POST['numar']."', '0');";
			$result = mysqli_query($conn, $sql);
			$done = "Obiectul a fost adaugat in cos!";
		}
	}
?>