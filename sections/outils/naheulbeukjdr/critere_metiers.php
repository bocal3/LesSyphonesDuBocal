<?php
	echo '<p>Vous pouvez avoir comme metier : ';
	if($perso->cou() >= 12 and $perso->fo() >= 12)
	{
		echo 'guerrier ';
	}
	if($perso->ad() >= 13)
	{
		echo 'assassin ';
	}
	if($perso->ad() >= 12)
	{
		echo 'voleur ';
	}
	if($perso->cha() >= 12)
	{
		echo 'prêtre ';
	}
	if($perso->int_() >= 12)
	{
		echo 'mage ';
	}
	if($perso->cou() >= 12 and $perso->int_() >= 10 and $perso->cha() >= 11 and $perso->fo() <= 9)
	{
		echo 'paladin ';
	}
	if($perso->cha() >= 10 and $perso->ad() >= 10)
	{
		echo 'ranger ';
	}
	if($perso->cha() >= 12 and $perso->ad() >= 11)
	{
		echo 'menestrel ';
	}
	if($perso->int_() >= 12 and $perso->cha() >= 11)
	{
		echo 'marchand ';
	}
	if($perso->ad() >= 11)
	{
		echo 'ingenieur ';
	}
	if($perso->cou() >= 11 and $perso->ad() >= 11)
	{
		echo 'pirate ';
	}
	if($perso->int_() >= 10 and $perso->cha() >= 12)
	{
		echo 'noble ';
	}
	if($perso->cou() >= 11 and $perso->cha() >= 12 and $perso->fo() >= 12)
	{
		echo 'officier ';
	}
	if($perso->ad() >= 12)
	{
		echo 'éclaireur ';
	}
	if($perso->cou() >= 11 and $perso->fo() >= 12)
	{
		echo 'soldat lourd ';
	}
	if($perso->int_() >= 12 and $perso->ad() >= 12)
	{
		echo 'medecin armurier ';
	}
	echo '</p>';
?>