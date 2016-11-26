<?php
	if(isset($_GET['page']))
	{
		// si le paramètre page est passé.
		$page=$_GET['page'];
		$jeu = new Boardgame("",0,0,0,0,0);
		$isext = 0;
		$isext = $jeu->est_extention($page);
		if($isext != 0)
		{
			echo "<p>Ce jeu est une extension</p>";
			// $count_game = 0;
			// $count_game = $jeu->count_ext($page);
		}
		$count_game = 0;
		$count_game = $jeu->count_($page,"",$isext);
		$score = new Score("",0);
		$array = array();
		$array = $score->select_top($page,"",$isext);
		foreach($array as $value)
		{
			$top_player = $value->name();
			$top_score = $value->valeur();
		}
		$score = new Score("",0);
		$array = array();
		$array = $score->select_avg($page,"",$isext);
		foreach($array as $value)
		{
			$avg_player = $value->name();
			$avg_score = $value->valeur();
		}
		$array = array();
		$array = $score->select_percent($page,"",$isext);
		foreach($array as $value)
		{
			$percent_player = $value->name();
			$percent_score = $value->valeur();
		}
		$array = array();
		$array = $score->select_tot($page,"",$isext);
		foreach($array as $value)
		{
			$total_player = $value->name();
			$total_score = $value->valeur();
		}
		echo '<section>';
			echo '<article>';
				echo '<h1><img src="images/ico_meeple.png" alt="Catégorie voyage" class="ico_categorie" />'. $page. '</h1>';
				echo '<h2>Nombre de partie :</h2>';
		if(!isset($count_game))
		{
			$count_game = 0;
		}
				echo '<p><td>' . $count_game .  '</td></p>';
				echo '<table>';
					echo '<caption>Statistique du jeu</caption>';
					echo '<thead>';
					   echo '<tr>';
						   echo '<th>Le meilleur score</th>';
						   echo '<th>La meilleur moyenne</th>';
						   echo '<th>Le meilleur pourcentage de victoire</th>';
						   echo '<th>Le meilleur total de score</th>';
					   echo '</tr>';
					echo '</thead>';

					echo '<tfoot> <!-- Pied de tableau -->';
						echo '<tr>';
						   echo '<th>Le meilleur score</th>';
						   echo '<th>La meilleur moyenne</th>';
						   echo '<th>Le meilleur pourcentage de victoire</th>';
						   echo '<th>Le meilleur total de score</th>';
						echo '</tr>';
				   echo '</tfoot>';

					echo '<tbody> <!-- Corps du tableau -->';
						echo '<tr>';
							if(!isset($top_player))
							{
								$top_player = "nobody";
							}
							echo '<td><a href="index.php?page=' . $top_player. '&type=joueur""\>' . $top_player. '</a></td>';
							if(!isset($avg_player))
							{
								$avg_player = "nobody";
							}
							echo '<td><a href="index.php?page=' . $avg_player. '&type=joueur""\>' . $avg_player. '</a></td>';
							if(!isset($percent_player))
							{
								$percent_player = "nobody";
							}
							echo '<td><a href="index.php?page=' . $percent_player. '&type=joueur""\>' . $percent_player. '</a></td>';
							if(!isset($total_player))
							{
								$total_player = "nobody";
							}
							echo '<td><a href="index.php?page=' . $total_player. '&type=joueur""\>' . $total_player. '</a></td>';
						echo '</tr>';
						echo '<tr>';
							if(!isset($top_score))
							{
								$top_score = 0;
							}
							echo "<td>" . $top_score .  "</td>";
							if(!isset($avg_score))
							{
								$avg_score = 0;
							}
							echo "<td>" . $avg_score .  "</td>";
							if(!isset($percent_score))
							{
								$percent_score = 0;
							}
							echo "<td>" . $percent_score .  "</td>";
							if(!isset($total_score))
							{
								$total_score = 0;
							}
							echo "<td>" . $total_score .  "</td>";
						echo '</tr>';
					echo '</tbody>';
				echo '</table>';
				$jeu = new Boardgame("",0,0,0,0,0);
				$array = array();
				$array = $jeu->select_jeu($page);
				foreach($array as $value)
				{
					$temps = $value->duration();
					$min = $value->min_players();
					$max = $value->max_players();
					$age = $value->age();
				}
				if($temps == boardgame::VALEUR_INFINI)
				{
					$temps = 'durée indéterminé';
				}
				else
				{
					$temps = $temps . ' minutes';
				}
				if($max == boardgame::VALEUR_INFINI)
				{
					if($min == 1)
					{
						$max = 'joueur et plus';
					}
					else
					{
						$max = 'joueurs et plus';
					}
				}
				else 
				{
					$max = 'à ' . $max . ' joueurs';
				}
				echo '<p><strong>C\'est un jeu de '. $temps. ' pour '. $min. ' '. $max. ' joueur à partir de '. $age. ' ans </strong></p>';
			echo '</article>';
		echo '</section>';
	}
?>