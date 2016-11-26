<?php
	require '..\..\class\gameplay.class.php';
	require '..\..\class\boardgame.class.php';
	require '..\..\class\player.class.php';
	require '..\..\class\point.class.php';
	session_start();
	$game_play = new GamePlay(date("Y-m-d"),$_SESSION['lieu']);
	$id_gp = $game_play->insert($game_play);
	if(isset($_SESSION['ext']) && !empty($_SESSION['ext']))
	{
		$tab = $_SESSION['ext'];
		foreach($tab as &$ext)
		{
			$jeu = new Boardgame("",0,0,0,0,0);
			$id_jeu = $jeu->select_id($ext);
			$game_play->boardgame_gameplay($id_jeu,$id_gp);
		}
		unset($tab);
	}
	$lespoints = array();
	$compteur = count( $_SESSION['joueur']);
	for($i = 0; $i < $compteur;$i++)
	{// Faut inserer les points maintenant.
		$joueur = new Player("");
		$id_joueur = $joueur->select_id($_SESSION['joueur'][$i]);
		$jeu = new Boardgame("",0,0,0,0,0);
		$idboard_game = $jeu->select_id($_SESSION['bg']);
		array_push($lespoints, $_POST[$i . 'score']);
		$points = new Point($id_joueur, $idboard_game, $id_gp, $_POST[$i . 'score']);
		$points->insert($points);
	}
	$points->update($id_gp,max($lespoints));
	header('Location: ../../index.php');     
?>