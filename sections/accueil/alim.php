<?php
	$reponse = $bdd->query('select players.name_players from players where is_activ = 1 ORDER BY players.name_players');
	echo '<section>';
		echo '<article>';
			echo '<form method="post" action="index.php">';
				echo '<p>';
					echo '<label for="title">Titre</label><input type="text" name="title" id="title" placeholder="Le titre de mon article" />';
				echo '</p>';
				echo '<p>';
					echo '<label for="article">Article</label><textarea type="text" name="article" id="article" placeholder="Mon article" /></textarea>';
				echo '</p>';
				echo '<p>';
					echo '<label for="flash">Flash</label><input type="text" name="flash" id="flash" placeholder="Quelques mots" />';
				echo '</p>';
					echo '<input type="submit" value="Valider" />';
			echo '</form>';
		echo '</article>';
	echo '</section>';
?>