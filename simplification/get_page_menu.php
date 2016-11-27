<?php
	if($page=="accueil")
	{
		$blog = new Blog("","","","","");
		$countblog = $blog->count_();
		if(isset($_GET['count']) AND $_GET['count'] < $countblog)
		{
			if(file_exists("sections\accueil\accueil.php"))
			{
				$limit = $_GET['count'];
				include("sections\accueil\accueil.php");
			}
		}
		else
		{
			if(file_exists("sections\accueil\accueil.php"))
			{
				$limit = 0;
				include("sections\accueil\accueil.php");
			}
		}
	}
	else if($page=="bg")
	{
		if(file_exists("sections\boardgames\boardgames.php"))
		{
			include("sections\boardgames\boardgames.php");
		}
	}
	else if($page=="pl")
	{
		if(file_exists("sections\players\players.php"))
		{
			include("sections\players\players.php");
		}
	}
	else if($page=="st")
	{
		if(isset($_SESSION['login']) && !empty(htmlspecialchars($_SESSION['login'])))
		{
			if(file_exists("sections\start\start.php"))
			{
				include("sections\start\start.php");
			}
		}
		else
		{
			header('Location: index.php');
		}
	}
	else if($page=="logout")
	{
		unset($_SESSION['login']);
		header('Location: index.php');
	}
	else if($page=="todo")
	{
		if(isset($_SESSION['login']) && !empty(htmlspecialchars($_SESSION['login'])))
		{
			if($_SESSION['login'] == 'bocal')
			{
				if(file_exists("todo.php"))
				{
					include("todo.php");
				}
			}
			else
			{
				header('Location: index.php');
			}
		}
		else
		{
			header('Location: index.php');
		}
	}
	else if($page=="out")
	{
		if(file_exists('sections\outils\outils.php'))
		{
			include('sections\outils\outils.php');
		}
	}				
?>