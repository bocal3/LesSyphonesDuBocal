<?php
	$dorque = new DemiOrque();
	$dorque->SetCOU($perso->cou());
	$dorque->SetAD($perso->ad());
	$dorque->SetINT($perso->int_());
	$dorque->SetFO($perso->fo());
	$dorque->SetCHA($perso->cha());
	$dorque->SetDestin($perso->destin());
	$dorque->SetATT($perso->att());
	$dorque->SetPRD($perso->prd());
	$dorque->SetPO($perso->po());
	echo $dorque->__toString();
	if(file_exists('sections\outils\naheulbeukjdr\critere_metiers.php'))
	{
		include('sections\outils\naheulbeukjdr\critere_metiers.php');
	}
	//compétences ?
?>