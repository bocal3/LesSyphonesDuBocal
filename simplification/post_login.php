<?php
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
				echo '<p>' . $password_erreur . '</p>';
		}
	}			
?>