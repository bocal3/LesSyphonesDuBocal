<?php
	if(isset($_SESSION['login']) && !empty(htmlspecialchars($_SESSION['login'])))
	{
		echo '<nav class="sous_menu">';
			echo '<ul>';
				echo '<li><a href="index.php?page=alimbg">Insérez un nouveau jeu</a></li>';
				echo '<li><a href="index.php?page=searchbg">Recherchez un jeu</a></li>';
			echo '</ul>';
		echo '</nav>';
		// L'INSERTION D'UN NOUVELLE ARTICLE NE SERA AUTORISÉE QUE POUR DES UTILISATEURS CONNECTÉS.
	}
	echo '<table>';
		echo '<tr>';
		// On affiche chaque entrée une à une
		$i = 1;
		$jeu = new Boardgame("",0,0,0,0,0);
		$array = array();
		$array = $jeu->selectnames_base_activ();
		foreach($array as $value)
		{
			echo "<td><a href=\"index.php?page=" . $value->name() ."&type=jeu\">" . $value->name()."</a></td>";
			if($i%5==0)
			{
		echo '</tr><tr>';
			}	
			$i++;
		}	
		echo '</tr>';
	echo '</table>	';
?>