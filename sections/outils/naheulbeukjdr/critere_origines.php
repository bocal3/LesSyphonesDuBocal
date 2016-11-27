<?php
	echo '<p>Vous pouvez choisir comme origine : un <a href="index.php?page=humain&cou=' . $perso->cou() . '&ad=' . $perso->ad() . '&int=' . $perso->int_() . '&fo=' . $perso->fo() . '&cha=' . $perso->cha() . '&destin=' . $perso->destin() . '&att=' . $perso->att() . '&prd=' . $perso->prd(). '&po=' . $perso->po() .'">humain</a>';
	if($perso->cou() >= 12 and $perso->fo() >= 13)
	{
		echo ' un <a href="index.php?page=barbare&cou=' . $perso->cou() . '&ad=' . $perso->ad() . '&int=' . $perso->int_() . '&fo=' . $perso->fo() . '&cha=' . $perso->cha() . '&destin=' . $perso->destin() . '&att=' . $perso->att() . '&prd=' . $perso->prd(). '&po=' . $perso->po() .'">barbare</a>';
	}
	if($perso->cou() >= 11 and $perso->fo() >= 12)
	{
		echo ' un nain';
	}
	if($perso->int_() >= 11 and $perso->cha() >= 12 and $perso->ad() >= 12 and $perso->fo() <= 12)
	{
		echo ' un haut elfe';
	}
	if($perso->cha() >= 10 and $perso->ad() >= 11)
	{
		echo ' un demi elfe';
	}
	if($perso->cha() >= 12 and $perso->ad() >= 10 and $perso->fo() <= 11)
	{
		echo ' un elfe sylvain';
	}
	if($perso->int_() >= 12 and $perso->ad() >= 13)
	{
		echo ' un elfe noir';
	}
	if($perso->int_() <= 8 and $perso->cha() <= 10 and $perso->fo() <= 12)
	{
		echo ' un orque';
	}
	if($perso->int_() <= 10 and $perso->ad() <= 11 and $perso->fo() >= 12)
	{
		echo ' un demi orque';
	}
	if($perso->cou() <= 10 and $perso->int_() <= 10 and $perso->cha() <= 8 and $perso->fo() <= 9)
	{
		echo ' un gobelin';
	}
	if($perso->int_() <= 9 and $perso->cha() <= 10 and $perso->ad() <= 11 and $perso->fo() >= 13)
	{
		echo ' un ogre';
	}
	if($perso->cou() >= 12 and $perso->int_() >= 10 and $perso->fo() <= 10)
	{
		echo ' un hobbit';
	}
	if($perso->int_() >= 10 and $perso->ad() >= 13 and $perso->fo() <= 18)
	{
		echo ' un gnome';
	}
	if($perso->cou() >= 10 and $perso->int_() >= 11 and $perso->ad() >= 12 and $perso->fo() >= 11)
	{
		echo ' un nain de la mafia';
	}
	if($perso->cou() >= 12 and $perso->cha() >= 12 and $perso->ad() >= 11 and $perso->fo() >= 12)
	{
		echo ' une amazone sylderienne';
	}
	echo '</p>';
	// echo '<p>Vous pouvez avoir comme metier : ';
	// if($perso->cou() >= 12 and $perso->fo() >= 12)
	// {
		// echo 'guerrier ';
	// }
	// if($perso->ad() >= 13)
	// {
		// echo 'assassin ';
	// }
	// if($perso->ad() >= 12)
	// {
		// echo 'voleur ';
	// }
	// if($perso->cha() >= 12)
	// {
		// echo 'prêtre ';
	// }
	// if($perso->int_() >= 12)
	// {
		// echo 'mage ';
	// }
	// if($perso->cou() >= 12 and $perso->int_() >= 10 and $perso->cha() >= 11 and $perso->fo() <= 9)
	// {
		// echo 'paladin ';
	// }
	// if($perso->cha() >= 10 and $perso->ad() >= 10)
	// {
		// echo 'ranger ';
	// }
	// if($perso->cha() >= 12 and $perso->ad() >= 11)
	// {
		// echo 'menestrel ';
	// }
	// if($perso->int_() >= 12 and $perso->cha() >= 11)
	// {
		// echo 'marchand ';
	// }
	// if($perso->ad() >= 11)
	// {
		// echo 'ingenieur ';
	// }
	// if($perso->cou() >= 11 and $perso->ad() >= 11)
	// {
		// echo 'pirate ';
	// }
	// if($perso->int_() >= 10 and $perso->cha() >= 12)
	// {
		// echo 'noble ';
	// }
	// if($perso->cou() >= 11 and $perso->cha() >= 12 and $perso->fo() >= 12)
	// {
		// echo 'officier ';
	// }
	// if($perso->ad() >= 12)
	// {
		// echo 'éclaireur ';
	// }
	// if($perso->cou() >= 11 and $perso->fo() >= 12)
	// {
		// echo 'soldat lourd ';
	// }
	// if($perso->int_() >= 12 and $perso->ad() >= 12)
	// {
		// echo 'medecin armurier ';
	// }
	// echo '</p>';
?>