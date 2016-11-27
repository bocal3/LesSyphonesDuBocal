<?php
	$helfe = new HautElfe();
	$helfe->SetCOU($perso->cou());
	$helfe->SetAD($perso->ad());
	$helfe->SetINT($perso->int_());
	$helfe->SetFO($perso->fo());
	$helfe->SetCHA($perso->cha());
	$helfe->SetDestin($perso->destin());
	$helfe->SetATT($perso->att());
	$helfe->SetPRD($perso->prd());
	$helfe->SetPO($perso->po());
	echo $helfe->__toString();
	if(file_exists('sections\outils\naheulbeukjdr\critere_metiers.php'))
	{
		include('sections\outils\naheulbeukjdr\critere_metiers.php');
	}
	//compétences ?
?>