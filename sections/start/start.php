<?php
	$jeu = new Boardgame("",0,0,0,0,0);
	$array = array();
	$array = $jeu->selectnames_base_activ();
		
	echo '<section>';
		echo '<article>';
			echo '<form method="post" action="index.php">';
			echo '<p>';
				echo '<label for="lieu">Lieu de la partie</label><input type="text" name="lieu" id="lieu" placeholder="La ville où nous sommes" />';
			echo '</p>';
				echo '<p>';
					echo '<label for="thelist">Jeu</label>  ';
					echo '<select name="thelist" onChange="combo(this, \'theinput\')">';
						foreach($array as $value)
						{
							echo '<option>' . $value->name().'</option>';
						}
					echo '</select>';
				echo '</p>';
				$jeu = new Boardgame("",0,0,0,0,0);
				$array = array();
				$array = $jeu->selectnames_ext_activ();
				echo '<p>';
					echo '<label for="ext">Extension utilisée</label>';
					echo '<select name="ext[]" multiple="multiple" onChange="combo(this, \'theinput\')">';		
						foreach($array as $value)
						{
							echo '<option>' . $value->name().'</option>';
						}
					echo '</select>';
				echo '</p>';
		$joueur = new Player("");
		$array = array();
		$array = $joueur->selectnames_activ();
				echo '<p>';
		echo '<label for="pls">Les joueurs</label>';
		echo '<select name="pls[]" multiple="multiple" onChange="combo(this, \'theinput\')">';		
			foreach($array as $value)
			{
				echo '<option>' . $value->name().'</option>';
			}
		echo '</select>';
	echo '</p>';
				echo '<p>';
					echo '<input type="submit" value="Valider" />';
			echo '</form>';
		echo '</article>';
	echo '</section>';

?>