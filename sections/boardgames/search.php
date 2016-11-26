<?php
	echo '<section>';
		echo '<article>';
			echo '<form method="post" action="index.php">';
				echo '<p>';
					echo '<label for="duree">Durée maximale de la partie</label><input type="number" name="duree" id="duree" value="1" />';
				echo '</p>';
				echo '<p>';
					echo '<label for="max">Nombre de joueur</label><input type="number" name="nbr" id="nbr" value="1" />';
				echo '</p>';
				echo '<p>';
					echo '<label for="age">Age du plus jeune joueur</label><input type="number" name="age" id="age" value="1" />';
				echo '</p>';
				echo '<input type="submit" value="Rechercher" />';
			echo '</form>';
		echo '</article>';
	echo '</section>';
?>