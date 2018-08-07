<?php
	if(isset($_SESSION['id']))
		session_unset();
	
	//login
	if(isset($_POST['login']))
	{
		if($_POST['email'] != '' && $_POST['parola'] != '')
		{
			$sql = "SELECT * FROM utilizator WHERE email = '".$_POST['email']."' 
			AND parola = '".$_POST['parola']."'";
			
			$result = mysqli_query($conn, $sql);
			
			if(mysqli_num_rows($result) == 1)
			{
				$row = mysqli_fetch_assoc($result);
				$_SESSION['id'] = $row['id_user'];
				
				$login = "Autentificare realizata cu succes!";
			}
			else
			{
				$login = "Email sau parola gresita!";
			}
		}
		else
		{
			$login = "Toate campurile trebuie completate!";
		}
	}
	
	//signup
	if(isset($_POST['signup']))
	{
		if($_POST['email'] != '' &&
		$_POST['parola'] != '' &&
		$_POST['judet'] != '' &&
		$_POST['localitate'] != '' &&
		$_POST['adresa'] != '' &&
		$_POST['telefon'] != '')
		{
			$sql = "SELECT * FROM utilizator WHERE email = '".$_POST['email']."'";
			$result = mysqli_query($conn, $sql);
			
			if(mysqli_num_rows($result) == 0)
			{
				$sql = "INSERT INTO utilizator (`email`, `parola`, `judet`, `localitate`, `adresa`, `telefon`) 
				VALUES ('".$_POST['email']."', '".$_POST['parola']."', '".$_POST['judet']."', '".$_POST['localitate']."', '".$_POST['adresa']."', '".$_POST['telefon']."');";
				
				$res = mysqli_query($conn, $sql);
				
				$signup = "Te-ai inregistrat!";
			}
			else{
				$signup = "Email-ul este deja folosit!";
			}
		}
		else{
			$signup = "Toate campurile trebuie completate!";
		}
		
	}

?>