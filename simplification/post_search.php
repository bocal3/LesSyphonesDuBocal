<?php
	if(isset($_POST['search']) && !empty(htmlspecialchars($_POST['search'])))
	{
		if(file_exists("sections\accueil\searched.php"))
		{
			include("sections\accueil\searched.php");
		}
	}
	else if(isset($_POST['duree']) && !empty(htmlspecialchars($_POST['duree'])) &&  isset($_POST['nbr']) && !empty(htmlspecialchars($_POST['nbr']))&&  isset($_POST['age']) && !empty(htmlspecialchars($_POST['age']))  )
	{
		if(file_exists("sections\boardgames\searched.php"))
		{
			include("sections\boardgames\searched.php");
		}
	}			
?>