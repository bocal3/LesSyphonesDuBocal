<?php
	else if($page=="alimblog")
	{
		if(isset($_SESSION['login']) && !empty(htmlspecialchars($_SESSION['login'])))
		{
			if(file_exists("sections\accueil\alim.php"))
			{
				include("sections\accueil\alim.php");
			}
		}
		else
		{
			header('Location: index.php');
		}
	}
	else if($page=="alimbg")
	{
		if(isset($_SESSION['login']) && !empty(htmlspecialchars($_SESSION['login'])))
		{
			if(file_exists("sections\boardgames\alim.php"))
			{
				include("sections\boardgames\alim.php");
			}
		}
		else
		{
			header('Location: index.php');
		}
	}
	else if($page=="alimpl")
	{
		if(isset($_SESSION['login']) && !empty(htmlspecialchars($_SESSION['login'])))
		{
			if(file_exists("sections\players\alim.php"))
			{
				include("sections\players\alim.php");
			}
		}
		else
		{
			if(file_exists("sections\players\inscription.php"))
			{
				include("sections\players\inscription.php");
			}
		}
	}				
?>