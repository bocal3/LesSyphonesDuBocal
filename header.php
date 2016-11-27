<?php
	echo '<header>';
		echo '<div id="titre_principal">';
			echo '<div id="logo">';
				echo '<img src="images/bocal.png" alt="Logo de Zozor" />';
				echo '<h1>Les syphon<strong>é</strong>s <br /> du bocal</h1>  ';  
			echo '</div>';
			echo '<h2>Jouons à la maison !</h2>';
		echo '</div>';
		echo '<nav>';
			echo '<ul>';
				echo '<li><a href="index.php?page=accueil">Accueil</a></li>';
				echo '<li><a href="index.php?page=bg">Jeux</a></li>';
				if(isset($_SESSION['login']) && !empty(htmlspecialchars($_SESSION['login'])))
				{
					echo '<li><a href="index.php?page=out">Outils</a></li>';
					echo '<li><a href="index.php?page=st">Start</a></li>';
					if($_SESSION['login'] == 'bocal')
					{
						echo '<li><a href="index.php?page=todo">Todo</a></li>';
					}
					echo '<li><a href=index.php?page=' . $_SESSION['login'].'&type=joueur>' . $_SESSION['login'].'</a></li>';
					echo '<li><a href="index.php?page=logout">Logout</a></li>';
				}
			echo '</ul>';
		echo '</nav>';
		if(file_exists("login.php"))
		{
			include("login.php");
		}
		
		
	echo '</header>';
	
?>
<!--
	Le header contient les éléments suivants :
		Le titre du site (Les syphonés du bocal)
		Une flash intro (Jouons à la maison !)
		et le menu du site.
		
		Dans le menu, nous navigerons vers l'index avec un paramètre page afin de préciser quelle page charger.
-->