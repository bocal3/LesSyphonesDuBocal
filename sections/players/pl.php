<?php
	if(isset($_GET['page']))
	{// si le paramètre page est passé.
		$page=$_GET['page'];
		$joueur = new Player("");
		$count_game = 0;
		$count_game = $joueur->count_($page);
		$count = 0;
	echo '<section>';
		echo '<article>';
			echo '<h1><img src="images/ico_meeple.png" alt="Catégorie voyage" class="ico_categorie" />'. $page. '</h1>';
			echo '<h2>Nombre de partie :</h2>';
			if(!isset($count_game))
			{
				$count_game = 0;
			}
			echo '<p><td>' . $count_game .  '</td></p>';
			$score = new Score("",0);
			$array = array();
			$array = $score->select_top("",$page,0);
			foreach($array as $value)
			{
				if($count == 0)
				{
					echo '<h2>Le meilleur score :</h2>';
				}
				$count++;
	echo '<table>';
		echo '<tbody> ';
				echo '<td>';
				echo '<a href="index.php?page=' . $value->name() . '&type=jeu""\>' . $value->name(). '</a>';
				echo '<p>' . $value->valeur() . '</p>';
				echo '</td>';
				if($i%5==0)
				{
		echo '</tr>';
		echo '<tr>';
				}	
				$i++;
				echo '</tr>';
				echo '</tbody> ';
	echo '</table>';
				$top_player = $value->name();
				$top_score = $value->valeur();
			}
			$count = 0;
			$score = new Score("",0);
			$array = array();
			$array = $score->select_avg("",$page,0);
			foreach($array as $value)
			{
				if($count == 0)
				{
					echo '<h2>La meilleur moyenne :</h2>';
				}
				$count++;
	echo '<table>';
		echo '<tbody> ';
				echo '<td>';
				echo '<a href="index.php?page=' . $value->name() . '&type=jeu""\>' . $value->name(). '</a>';
				echo '<p>' . $value->valeur() . '</p>';
				echo '</td>';
				if($i%5==0)
				{
		echo '</tr>';
		echo '<tr>';
				}	
				$i++;
				echo '</tr>';
				echo '</tbody> ';
	echo '</table>';
				$top_player = $value->name();
				$top_score = $value->valeur();
			}
			$count = 0;
			$score = new Score("",0);
			$array = array();
			$array = $score->select_percent("",$page,0);
			foreach($array as $value)
			{
				if($count == 0)
				{
					echo '<h2>Le meilleur pourcentage de victoire :</h2>';
				}
				$count++;
	echo '<table>';
		echo '<tbody> ';
				echo '<td>';
				echo '<a href="index.php?page=' . $value->name() . '&type=jeu""\>' . $value->name(). '</a>';
				echo '<p>' . $value->valeur() . '</p>';
				echo '</td>';
				if($i%5==0)
				{
		echo '</tr>';
		echo '<tr>';
				}	
				$i++;
				echo '</tr>';
				echo '</tbody> ';
	echo '</table>';
				$top_player = $value->name();
				$top_score = $value->valeur();
			}
			$count = 0;
			$score = new Score("",0);
			$array = array();
			$array = $score->select_tot("",$page,0);
			foreach($array as $value)
			{
				if($count == 0)
				{
					echo '<h2>Le meilleur total de score :</h2>';
				}
				$count++;
	echo '<table>';
		echo '<tbody> ';
				echo '<td>';
				echo '<a href="index.php?page=' . $value->name() . '&type=jeu""\>' . $value->name(). '</a>';
				echo '<p>' . $value->valeur() . '</p>';
				echo '</td>';
				if($i%5==0)
				{
		echo '</tr>';
		echo '<tr>';
				}	
				$i++;
				echo '</tr>';
				echo '</tbody> ';
	echo '</table>';
				$top_player = $value->name();
				$top_score = $value->valeur();
			}	
		echo '</article>';
	echo '</section>';
	}
?>