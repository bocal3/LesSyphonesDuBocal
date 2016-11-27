<?php
	$limit = 0;
	$blog = new Blog("","","","","");
	$countblog = $blog->count_();
	if(file_exists("simplification\post_jdr.php"))
	{
		include("simplification\post_jdr.php");
	}
	else if(file_exists("simplification\post_search.php"))
	{
		include("simplification\post_search.php");
	}
	else if(file_exists("simplification\post_insert.php"))
	{
		include("simplification\post_insert.php");
	}
	else if(file_exists("simplification\post_login.php"))
	{
		include("simplification\post_login.php");
	}
	else if(file_exists("simplification\post_start.php"))
	{
		include("simplification\post_start.php");
	}
	else
	{
		if(file_exists("sections\accueil\accueil.php"))
		{
			include("sections\accueil\accueil.php");
		}
	}			
?>