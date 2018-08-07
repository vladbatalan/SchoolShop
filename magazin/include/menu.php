<!-- meniul care contine butoanele Home, Descriere, Produse, Contact -->
	<div class='menu'>
		<ul>
			<li><a href='home.php'
			<?php  if(basename($_SERVER['PHP_SELF']) == 'home.php') echo "class='active'";?>
			> Home </a></li>
			<li><a href='descriere.php'
			<?php if(basename($_SERVER['PHP_SELF']) == 'descriere.php') echo "class='active'";?>
			> Descriere </a></li>
			<li><a href='produse.php'
			<?php if(basename($_SERVER['PHP_SELF']) == 'produse.php') echo "class='active'"; ?>
			> Produse </a></li>
			<li><a href='contact.php'
			<?php  if(basename($_SERVER['PHP_SELF']) == 'contact.php') echo "class='active'"; ?>
			> Contact </a></li>
		</ul>	
	</div>