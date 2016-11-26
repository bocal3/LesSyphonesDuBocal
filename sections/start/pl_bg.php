<?php
// ne pas oublier les extensions
	
	
	echo '<h2>' .  $pls . '</h2>';
	echo '<p>';
		echo '<label for="'. $i.'score">Score</label><input type="number" name="'. $i.'score" id="nom" placeholder="0" />';
	echo '</p>';
	$jeu = new Boardgame("",0,0,0,0,0);
	$count_game = 0;
	$count_game = $jeu->count_($_POST['thelist'],$pls,0);
	if(!isset($count_game))
	{
		$count_game = 0;
	}
	echo '<p>Nombre de partie : ' . $count_game . '</p>';
	if($count_game !=0)
	{
		$score = new Score("",0);
		$array = array();
		$array = $score->select_top($_POST['thelist'],$pls,0);
		foreach($array as $value)
		{
			echo '<p>Le meilleur score : ' . $value->valeur(). '</p>';
		}
		
		$score = new Score("",0);
		$array = array();
		$array = $score->select_avg($_POST['thelist'],$pls,0);
		foreach($array as $value)
		{
			echo '<p>La meilleur moyenne : ' . $value->valeur() . '</p>';
		}
		$array = array();
		$array = $score->select_percent($_POST['thelist'],$pls,0);
		foreach($array as $value)
		{
			echo '<p>Le meilleur pourcentage de victoire : ' . $value->valeur() . '</p>';
		}
		$array = array();
		$array = $score->select_tot($_POST['thelist'],$pls,0);
		foreach($array as $value)
		{
			echo '<p>Le meilleur total de score : ' . $value->valeur() . '</p>';
		}
	}	
?>