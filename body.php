<?php
	require 'class\score.class.php';
	require 'class\boardgame.class.php';
	require 'class\player.class.php';
	require 'class\hybrid.class.php';
	require 'class\blog.class.php';
	require 'class\gameplay.class.php';
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=juegos;charset=utf8', 'root', '');
		// On se connecte à la base de données avec les bosn identifiants.
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
	if(file_exists("banniere.php"))
	{
		include("banniere.php");
	}
	// On affiche la bannière juste en dessous du header.
	if(isset($_GET['type']))
	{
		$type=$_GET['type'];
		if(isset($_GET['page']))
		{
			$page=$_GET['page'];
			if($type=="jeu")
			{
				if(file_exists("sections\boardgames\boardgames.php"))
				{
					include("sections\boardgames\boardgames.php");
				}
				if(file_exists("sections\boardgames\bg.php"))
				{
					include("sections\boardgames\bg.php");
				}
				if(file_exists("sections\boardgames\bg\\" . $_GET['page']. ".php"))
				{
					include("sections\boardgames\bg\\" . $_GET['page']. ".php");
				}
			}
			else if($type=="joueur" AND isset($_SESSION['login']) && !empty(htmlspecialchars($_SESSION['login'])))
			{
				if(file_exists("sections\players\players.php"))
				{
					include("sections\players\players.php");
				}
				if(file_exists("sections\players\pl.php"))
				{
					include("sections\players\pl.php");
				}
			}
		}
	}
	else
	{
		if(isset($_GET['page']))
		{// si le paramètre page est passé.
			$page=$_GET['page'];
		
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
			else if($page=="searched")
			{
				if(file_exists("sections\accueil\searched.php"))
				{
					include("sections\accueil\searched.php");
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
			else if($page=="searchbg")
			{
				if(file_exists("sections\boardgames\search.php"))
				{
					include("sections\boardgames\search.php");
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
			else if($page=="d4")
			{
				if(file_exists('sections\outils\naheulbeukjdr\d4.php'))
				{
					require 'class\d.class.php';
					include('sections\outils\naheulbeukjdr\d4.php');
				}
			}
			else if($page=="d6")
			{
				if(file_exists('sections\outils\naheulbeukjdr\d6.php'))
				{
					require 'class\d.class.php';
					include('sections\outils\naheulbeukjdr\d6.php');
				}
			}
			else if($page=="d20")
			{
				if(file_exists('sections\outils\naheulbeukjdr\d20.php'))
				{
					require 'class\d.class.php';
					include('sections\outils\naheulbeukjdr\d20.php');
				}
			}
			else if($page=="d100")
			{
				if(file_exists('sections\outils\naheulbeukjdr\d100.php'))
				{
					require 'class\d.class.php';
					include('sections\outils\naheulbeukjdr\d100.php');
				}
			}
		}
		else
		{//Si nous n'avons pas de paramètre page.
			$limit = 0;
			$blog = new Blog("","","","","");
			$countblog = $blog->count_();
			if(isset($_POST['search']) && !empty(htmlspecialchars($_POST['search'])))
			{
				if(file_exists("sections\accueil\searched.php"))
				{
					include("sections\accueil\searched.php");
				}
			}
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
			else if(isset($_POST['nompl']) && !empty(htmlspecialchars($_POST['nompl'])))
			{
				if(isset($_POST['verif']) && !empty($_POST['verif']) && isset($_POST['password']) && !empty($_POST['password']))
				{
					//on Vérifie le password et on enregistre l'utilisateur.
					if($_POST['password'] == $_POST['verif'])
					{
						$joueur = new Player("");
						$joueur->SetName($_POST['nompl']);
						$joueur->SetPassword(md5(sha1($_POST['verif'])));
						$joueur->inscription($joueur);
						$_SESSION['login'] = $joueur->name();
					header('Location: index.php');
					}
					else
					{
						echo '<p>Erreur de vérification du mot de passe !</p>';
					}
				}
				else
				{
					$joueur = new Player("");
					$joueur->SetName($_POST['nompl']);
					$joueur->SetPassword(md5(sha1('12345678')));
					$joueur->inscription($joueur);
					if(file_exists("sections\players\players.php"))
					{
						include("sections\players\players.php");
					}
				}
			}
			else if(isset($_POST['duree']) && !empty(htmlspecialchars($_POST['duree'])) &&  isset($_POST['nbr']) && !empty(htmlspecialchars($_POST['nbr']))&&  isset($_POST['age']) && !empty(htmlspecialchars($_POST['age']))  )
			{
				if(file_exists("sections\boardgames\searched.php"))
				{
					include("sections\boardgames\searched.php");
				}
			}
			else if(isset($_POST['thelist']) && !empty(htmlspecialchars($_POST['thelist'])) && isset($_POST['pls']) && !empty($_POST['pls']))
			{
				if(file_exists("sections\start\gp.php"))
				{
					include("sections\start\gp.php");
				}
			}
			else if(isset($_POST['login']) && !empty(htmlspecialchars($_POST['login'])) && isset($_POST['password']) && !empty($_POST['password']))
			{
				$joueur = new Player($_POST['login']);
				$pass = '';
				$pass = $joueur->select_pass($joueur);
				if(md5(sha1($_POST['password'])) == $pass)
				{
					$_SESSION['login'] = $_POST['login'];
					header('Location: index.php');
				}
				else
				{
						echo '<p>Erreur de mot de passe !</p>';
				}
			}
			else
			{
				if(file_exists("sections\accueil\accueil.php"))
				{
					include("sections\accueil\accueil.php");
				}
			}
		}
	}				
?>