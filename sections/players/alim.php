<?php
	echo '<section>';
		echo '<article>';
			echo '<form method="post" action="index.php">';
				echo '<p>';
					echo '<label for="nompl">Nom du joueur</label><input type="text" name="nompl" id="nompl" placeholder="Le nom du joueur" />';
				echo '</p>';
				echo '<input type="submit" value="Valider" />';
			echo '</form>';
		echo '</article>';
	echo '</section>';
?>