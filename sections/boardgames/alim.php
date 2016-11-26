<?php
	echo '<section>';
		echo '<article>';
			echo '<form method="post" action="index.php">';
				echo '<p>';
					echo '<label for="nom">Nom du jeu</label><input type="text" name="nom" id="nom" placeholder="Le nom du jeu" />';
				echo '</p>';
				echo '<p>';
					echo '<label for="duree">Durée d\'une partie</label><input type="number" name="duree" id="duree" placeholder="30" />';
				echo '</p>';
				echo '<p>';
					echo '<label for="min">Nombre minimum de joueur</label><input type="number" name="min" id="min" placeholder="1" />';
				echo '</p>';
				echo '<p>';
					echo '<label for="max">Nombre maximum de joueur</label><input type="number" name="max" id="max" placeholder="1000" />';
				echo '</p>';
				echo '<p>';
					echo '<label for="age">Age minimal d\'un joueur</label><input type="number" name="age" id="age" placeholder="5" />';
				echo '</p>';
				echo '<p>';
					echo '<label for="isext">Est-ce une extension ?</label><input type="number" name="isext" id="isext" placeholder="1 pour dire oui" />';
				echo '</p>';
				echo '<input type="submit" value="Valider" />';
			echo '</form>';
		echo '</article>';
	echo '</section>';
?>