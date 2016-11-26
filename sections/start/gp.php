<?php
	//session_start();
	echo '<h1>Nous allons joué à '. $_POST['thelist'] .'</h1>' ;
	if(isset($_POST['ext']) && !empty($_POST['ext']))
	{
		$_SESSION['ext'] = $_POST['ext'];
	}
	$_SESSION['lieu'] = $_POST['lieu'];
	$_SESSION['bg'] = $_POST['thelist'];
	$_SESSION['joueur'] = $_POST['pls'];
	
	echo '<section>';
		echo '<article>';
			echo '<form method="post" action="sections\start\process_gp.php">';
	$i=0;
	$tab = $_POST['pls'];
				echo '<p>Les joueurs en jeu sont : </p>';
				foreach($tab as &$pls)
				{
					if(file_exists("sections\start\pl_bg.php"))
					{
						include("sections\start\pl_bg.php");
					}
					$i++;
				}
				unset($pls);
	echo '<input type="submit" value="Terminer" />';
			echo '</form>';
		echo '</article>';
	echo '</section>';
?>