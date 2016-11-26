<?php
	echo '<section>';
		echo '<article>';
			echo '<form method="post" action="index.php">';
				echo '<p>';
					echo '<label for="nompl">Nom du joueur</label><input type="text" name="nompl" id="nompl" placeholder="Le nom du joueur" />';
				echo '</p>';
				echo '<p>';
					echo '<label for="password">Password</label><input type="password" name="password" id="password" placeholder="Password" />';
				echo '</p>';
				echo '<p>';
					echo '<label for="password">Verification</label><input type="password" name="verif" id="verif" placeholder="Password" />';
				echo '</p>';
				echo '<input type="submit" value="Valider" />';
			echo '</form>';
		echo '</article>';
	echo '</section>';
?>