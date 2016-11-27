<?php
	else if(isset($_POST['title']) && !empty(htmlspecialchars($_POST['title'])) &&  isset($_POST['article']) && !empty(htmlspecialchars($_POST['article'])) &&  isset($_POST['flash']) && !empty(htmlspecialchars($_POST['flash']))  )
	{
		$joueur = new Player("");
		$idwriter = $joueur->select_id($_SESSION['login']);
		$blog = new Blog($idwriter,addslashes($_POST['title']),addslashes($_POST['article']),addslashes($_POST['flash']),date("Y-m-d"));
		$blog->insert($blog);
		if(file_exists("sections\accueil\accueil.php"))
		{
			include("sections\accueil\accueil.php");
		}
	}
	else if(isset($_POST['nom']) && !empty(htmlspecialchars($_POST['nom'])) && isset($_POST['duree']) && !empty(htmlspecialchars($_POST['duree'])) &&  isset($_POST['min']) && !empty(htmlspecialchars($_POST['min'])) &&  isset($_POST['max']) && !empty(htmlspecialchars($_POST['max'])) && !empty(htmlspecialchars($_POST['min'])) &&  isset($_POST['age']) && !empty(htmlspecialchars($_POST['age']))   )
	{
		if(isset($_POST['isext']) && !empty(htmlspecialchars($_POST['isext'])))
		{
			$isext = $_POST['isext'];
		}
		else
		{
			$isext = 0;
		}
		
		$jeu = new Boardgame(addslashes($_POST['nom']),addslashes($_POST['duree']),addslashes($_POST['min']),addslashes($_POST['max']),addslashes($_POST['age']),$isext);
		$jeu->insert($jeu);
		if(file_exists("sections\boardgames\boardgames.php"))
		{
			include("sections\boardgames\boardgames.php");
		}
	}			
?>