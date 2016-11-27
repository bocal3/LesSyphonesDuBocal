<?php
	$elfen = new ElfeNoir();
	$elfen->SetCOU($perso->cou());
	$elfen->SetAD($perso->ad());
	$elfen->SetINT($perso->int_());
	$elfen->SetFO($perso->fo());
	$elfen->SetCHA($perso->cha());
	$elfen->SetDestin($perso->destin());
	$elfen->SetATT($perso->att());
	$elfen->SetPRD($perso->prd());
	$elfen->SetPO($perso->po());
	echo $elfen->__toString();
	if(file_exists('sections\outils\naheulbeukjdr\critere_metiers.php'))
	{
		include('sections\outils\naheulbeukjdr\critere_metiers.php');
	}
	//compétences ?
?>