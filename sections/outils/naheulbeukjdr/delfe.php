<?php
	$delfe = new DemiElfe();
	$delfe->SetCOU($perso->cou());
	$delfe->SetAD($perso->ad());
	$delfe->SetINT($perso->int_());
	$delfe->SetFO($perso->fo());
	$delfe->SetCHA($perso->cha());
	$delfe->SetDestin($perso->destin());
	$delfe->SetATT($perso->att());
	$delfe->SetPRD($perso->prd());
	$delfe->SetPO($perso->po());
	echo $delfe->__toString();
	if(file_exists('sections\outils\naheulbeukjdr\critere_metiers.php'))
	{
		include('sections\outils\naheulbeukjdr\critere_metiers.php');
	}
	//compétences ?
?>