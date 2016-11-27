<?php
	else if($page=="d4")
	{
		if(file_exists('sections\outils\naheulbeukjdr\d4.php'))
		{
			require 'class\outils\d.class.php';
			include('sections\outils\naheulbeukjdr\d4.php');
		}
	}
	else if($page=="d6")
	{
		if(file_exists('sections\outils\naheulbeukjdr\d6.php'))
		{
			require 'class\outils\d.class.php';
			include('sections\outils\naheulbeukjdr\d6.php');
		}
	}
	else if($page=="d20")
	{
		if(file_exists('sections\outils\naheulbeukjdr\d20.php'))
		{
			require 'class\outils\d.class.php';
			include('sections\outils\naheulbeukjdr\d20.php');
		}
	}
	else if($page=="d100")
	{
		if(file_exists('sections\outils\naheulbeukjdr\d100.php'))
		{
			require 'class\outils\d.class.php';
			include('sections\outils\naheulbeukjdr\d100.php');
		}
	}
	else if($page=="com")
	{
		if(file_exists('sections\outils\naheulbeukjdr\critere_origines.php'))
		{
			require 'class\outils\d.class.php';
			require 'class\outils\perso.class.php';
			include('sections\outils\naheulbeukjdr\critere_origines.php');
		}
	}
	else if($page=="newperso")
	{
		if(file_exists('sections\outils\naheulbeukjdr\new_perso.php'))
		{
			require 'class\outils\d.class.php';
			require 'class\outils\perso.class.php';
			include('sections\outils\naheulbeukjdr\new_perso.php');
		}
	}
	else if($page=="humain" OR $page=="barbare" OR $page=="nain" OR $page=="helfe" OR $page=="delfe" OR $page=="elfes" OR $page=="elfen" OR $page=="orque" OR $page=="gobelin" OR $page=="ogre" OR $page=="hobbit" OR $page=="gnome" OR $page=="nainm" OR $page=="amazones")
	{
		require 'class\outils\perso.class.php';
		$perso = new Perso();
		$perso->SetCOU($_GET['cou']);
		$perso->SetAD($_GET['ad']);
		$perso->SetINT($_GET['int']);
		$perso->SetFO($_GET['fo']);
		$perso->SetCHA($_GET['cha']);
		$perso->SetDestin($_GET['destin']);
		$perso->SetPO($_GET['po']);
		$perso->SetATT($_GET['att']);
		$perso->SetPRD($_GET['prd']);
		if(file_exists('sections\outils\naheulbeukjdr\\' . $page. '.php'))
		{
			require 'class\outils\\' . $page. '.class.php';
			include('sections\outils\naheulbeukjdr\\' . $page. '.php');
		}
	}				
?>