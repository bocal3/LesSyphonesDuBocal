<?php
	echo '<section>';
		echo '<article>';
			echo '<form method="post" action="index.php">';
				echo '<p>';
					echo '<label for="search">Recherche</label><input type="search" name="search" id="search" placeholder="Un jeu ou un joueur" />';
				echo '</p>';
			echo '</form>';
		echo '</article>';
	echo '</section>';
	if(isset($_SESSION['login']) && !empty(htmlspecialchars($_SESSION['login'])))
	{
		echo '<nav class="sous_menu">';
			echo '<ul>';
				echo '<li><a href="index.php?page=alimblog">Insérez un nouvel article</a></li>';
			echo '</ul>';
		echo '</nav>';
		// L'INSERTION D'UN NOUVELLE ARTICLE NE SERA AUTORISÉE QUE POUR DES UTILISATEURS CONNECTÉS.
	}
	$blog = new Blog("","","","","");
	$array = array();
	$array = $blog->select($limit);
	foreach($array as $value)
	{
		//Chaque article du blog est affiché grace à la boucle.
	echo '<section>';
		echo '<article>';
			echo '<h1><img src="images/ico_meeple.png" alt="Catégorie voyage" class="ico_categorie" />' . $value->title().'</h1>' ;
			echo '<p>' . $value->content().'</p>' ;
		echo '</article>';
		echo '<aside>';
			echo '<h1>' . $value->name().'</h1>' ;
			echo '<p>' . $value->flash().'</p>' ;
				$date = new DateTime($value->date_());
				echo '<p>' . date_format($date,'d-m-Y').'</p>' ;
		echo '</aside>';
	echo '</section>';
	}
	if($limit < 0)
	{
		$limit = 0;
	}
	if($limit != 0)
	{
		echo '<a href=index.php?page=accueil&count='. ($limit-10) .'>Précédent</a>';
	}
	if($limit != 0 and $countblog >($limit+10))
	{
		echo '...';
	}
	//echo '...';
	if($countblog >($limit+10))
	{
		echo '<a href=index.php?page=accueil&count='. ($limit+10) .'>Suivant</a>';
	}
?>