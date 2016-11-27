<?php
	echo '<p>Vous pouvez choisir comme origine : un <a href="index.php?page=humain&cou=' . $perso->cou() . '&ad=' . $perso->ad() . '&int=' . $perso->int_() . '&fo=' . $perso->fo() . '&cha=' . $perso->cha() . '&destin=' . $perso->destin() . '&att=' . $perso->att() . '&prd=' . $perso->prd(). '&po=' . $perso->po() .'">humain</a>';
	if($perso->cou() >= 12 and $perso->fo() >= 13)
	{
		echo ' un <a href="index.php?page=barbare&cou=' . $perso->cou() . '&ad=' . $perso->ad() . '&int=' . $perso->int_() . '&fo=' . $perso->fo() . '&cha=' . $perso->cha() . '&destin=' . $perso->destin() . '&att=' . $perso->att() . '&prd=' . $perso->prd(). '&po=' . $perso->po() .'">barbare</a>';
	}
	if($perso->cou() >= 11 and $perso->fo() >= 12)
	{
		echo ' un <a href="index.php?page=nain&cou=' . $perso->cou() . '&ad=' . $perso->ad() . '&int=' . $perso->int_() . '&fo=' . $perso->fo() . '&cha=' . $perso->cha() . '&destin=' . $perso->destin() . '&att=' . $perso->att() . '&prd=' . $perso->prd(). '&po=' . $perso->po() .'">nain</a>';
	}
	if($perso->int_() >= 11 and $perso->cha() >= 12 and $perso->ad() >= 12 and $perso->fo() <= 12)
	{
		echo ' un <a href="index.php?page=helfe&cou=' . $perso->cou() . '&ad=' . $perso->ad() . '&int=' . $perso->int_() . '&fo=' . $perso->fo() . '&cha=' . $perso->cha() . '&destin=' . $perso->destin() . '&att=' . $perso->att() . '&prd=' . $perso->prd(). '&po=' . $perso->po() .'">haut elfe</a>';
	}
	if($perso->cha() >= 10 and $perso->ad() >= 11)
	{
		echo ' un <a href="index.php?page=delfe&cou=' . $perso->cou() . '&ad=' . $perso->ad() . '&int=' . $perso->int_() . '&fo=' . $perso->fo() . '&cha=' . $perso->cha() . '&destin=' . $perso->destin() . '&att=' . $perso->att() . '&prd=' . $perso->prd(). '&po=' . $perso->po() .'">demi elfe</a>';
	}
	if($perso->cha() >= 12 and $perso->ad() >= 10 and $perso->fo() <= 11)
	{
		echo ' un <a href="index.php?page=elfes&cou=' . $perso->cou() . '&ad=' . $perso->ad() . '&int=' . $perso->int_() . '&fo=' . $perso->fo() . '&cha=' . $perso->cha() . '&destin=' . $perso->destin() . '&att=' . $perso->att() . '&prd=' . $perso->prd(). '&po=' . $perso->po() .'">elfe sylvain</a>';
	}
	if($perso->int_() >= 12 and $perso->ad() >= 13)
	{
		echo ' un <a href="index.php?page=elfen&cou=' . $perso->cou() . '&ad=' . $perso->ad() . '&int=' . $perso->int_() . '&fo=' . $perso->fo() . '&cha=' . $perso->cha() . '&destin=' . $perso->destin() . '&att=' . $perso->att() . '&prd=' . $perso->prd(). '&po=' . $perso->po() .'">elfe noir</a>';
	}
	if($perso->int_() <= 8 and $perso->cha() <= 10 and $perso->fo() <= 12)
	{
		echo ' un <a href="index.php?page=orque&cou=' . $perso->cou() . '&ad=' . $perso->ad() . '&int=' . $perso->int_() . '&fo=' . $perso->fo() . '&cha=' . $perso->cha() . '&destin=' . $perso->destin() . '&att=' . $perso->att() . '&prd=' . $perso->prd(). '&po=' . $perso->po() .'">orque</a>';
	}
	if($perso->int_() <= 10 and $perso->ad() <= 11 and $perso->fo() >= 12)
	{
		echo ' un <a href="index.php?page=dorque&cou=' . $perso->cou() . '&ad=' . $perso->ad() . '&int=' . $perso->int_() . '&fo=' . $perso->fo() . '&cha=' . $perso->cha() . '&destin=' . $perso->destin() . '&att=' . $perso->att() . '&prd=' . $perso->prd(). '&po=' . $perso->po() .'">demi orque</a>';
	}
	if($perso->cou() <= 10 and $perso->int_() <= 10 and $perso->cha() <= 8 and $perso->fo() <= 9)
	{
		echo ' un <a href="index.php?page=gobelin&cou=' . $perso->cou() . '&ad=' . $perso->ad() . '&int=' . $perso->int_() . '&fo=' . $perso->fo() . '&cha=' . $perso->cha() . '&destin=' . $perso->destin() . '&att=' . $perso->att() . '&prd=' . $perso->prd(). '&po=' . $perso->po() .'">gobelin</a>';
	}
	if($perso->int_() <= 9 and $perso->cha() <= 10 and $perso->ad() <= 11 and $perso->fo() >= 13)
	{
		echo ' un <a href="index.php?page=ogre&cou=' . $perso->cou() . '&ad=' . $perso->ad() . '&int=' . $perso->int_() . '&fo=' . $perso->fo() . '&cha=' . $perso->cha() . '&destin=' . $perso->destin() . '&att=' . $perso->att() . '&prd=' . $perso->prd(). '&po=' . $perso->po() .'">ogre</a>';
	}
	if($perso->cou() >= 12 and $perso->int_() >= 10 and $perso->fo() <= 10)
	{
		echo ' un <a href="index.php?page=hobbit&cou=' . $perso->cou() . '&ad=' . $perso->ad() . '&int=' . $perso->int_() . '&fo=' . $perso->fo() . '&cha=' . $perso->cha() . '&destin=' . $perso->destin() . '&att=' . $perso->att() . '&prd=' . $perso->prd(). '&po=' . $perso->po() .'">hobbit</a>';
	}
	if($perso->int_() >= 10 and $perso->ad() >= 13 and $perso->fo() <= 18)
	{
		echo ' un <a href="index.php?page=gnome&cou=' . $perso->cou() . '&ad=' . $perso->ad() . '&int=' . $perso->int_() . '&fo=' . $perso->fo() . '&cha=' . $perso->cha() . '&destin=' . $perso->destin() . '&att=' . $perso->att() . '&prd=' . $perso->prd(). '&po=' . $perso->po() .'">gnome</a>';
	}
	if($perso->cou() >= 10 and $perso->int_() >= 11 and $perso->ad() >= 12 and $perso->fo() >= 11)
	{
		echo ' un <a href="index.php?page=nainm&cou=' . $perso->cou() . '&ad=' . $perso->ad() . '&int=' . $perso->int_() . '&fo=' . $perso->fo() . '&cha=' . $perso->cha() . '&destin=' . $perso->destin() . '&att=' . $perso->att() . '&prd=' . $perso->prd(). '&po=' . $perso->po() .'">nain de la mafia</a>';
	}
	if($perso->cou() >= 12 and $perso->cha() >= 12 and $perso->ad() >= 11 and $perso->fo() >= 12)
	{
		echo ' un <a href="index.php?page=amazones&cou=' . $perso->cou() . '&ad=' . $perso->ad() . '&int=' . $perso->int_() . '&fo=' . $perso->fo() . '&cha=' . $perso->cha() . '&destin=' . $perso->destin() . '&att=' . $perso->att() . '&prd=' . $perso->prd(). '&po=' . $perso->po() .'">amazone sylderienne</a>';
	}
	echo '</p>';
?>