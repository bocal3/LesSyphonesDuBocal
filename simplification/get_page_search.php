<?php
	else if($page=="searched")
	{
		if(file_exists("sections\accueil\searched.php"))
		{
			include("sections\accueil\searched.php");
		}
	}
	else if($page=="searchbg")
	{
		if(file_exists("sections\boardgames\search.php"))
		{
			include("sections\boardgames\search.php");
		}
	}			
?>