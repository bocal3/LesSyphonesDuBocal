<?php
	require 'class\score.class.php';
	require 'class\boardgame.class.php';
	require 'class\player.class.php';
	require 'class\hybrid.class.php';
	require 'class\blog.class.php';
	require 'class\gameplay.class.php';
	if(file_exists("banniere.php"))
	{
		include("banniere.php");
	}
	// On affiche la bannière juste en dessous du header.
	if(isset($_GET['type']))
	{
		if(file_exists("simplification\get_type.php"))
		{
			include("simplification\get_type.php");
		}
	}
	else
	{
		if(isset($_GET['page']))
		{
			if(file_exists("simplification\get_page.php"))
			{
				include("simplification\get_page.php");
			}
		}
		else
		{//Si nous n'avons pas de paramètre page.
			if(file_exists("simplification\post.php"))
			{
				include("simplification\post.php");
			}
		}
	}				
?>