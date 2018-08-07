<?php
	if(isset($_POST['sterge']) && isset($_GET['delete']))
	{
		$sql = "DELETE FROM `cos` WHERE `id_produs` = '".$_GET['delete']."' AND id_user = '".$_SESSION['id']."'";
		$result = mysqli_query($conn, $sql);
	}
	
	if(isset($_POST['comanda']))
	{
		$sql = "SELECT * FROM cos WHERE id_user = '".$_SESSION['id']."' AND comanda = '0'";
		$result = mysqli_query($conn, $sql);
		
		while($row = mysqli_fetch_assoc($result))
		{
			$sql = "UPDATE cos SET comanda ";
		}
	}
?>