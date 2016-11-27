<?php
	$elfes = new ElfeSylvain();
	$elfes->SetCOU($perso->cou());
	$elfes->SetAD($perso->ad());
	$elfes->SetINT($perso->int_());
	$elfes->SetFO($perso->fo());
	$elfes->SetCHA($perso->cha());
	$elfes->SetDestin($perso->destin());
	$elfes->SetATT($perso->att());
	$elfes->SetPRD($perso->prd());
	$elfes->SetPO($perso->po());
	echo $elfes->__toString();
	if(file_exists('sections\outils\naheulbeukjdr\critere_metiers.php'))
	{
		include('sections\outils\naheulbeukjdr\critere_metiers.php');
	}
	//compétences ?
?>