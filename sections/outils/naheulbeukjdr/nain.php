<?php
	$nain = new Nain();
	$nain->SetCOU($perso->cou());
	$nain->SetAD($perso->ad());
	$nain->SetINT($perso->int_());
	$nain->SetFO($perso->fo());
	$nain->SetCHA($perso->cha());
	$nain->SetDestin($perso->destin());
	$nain->SetATT($perso->att());
	$nain->SetPRD($perso->prd());
	$nain->SetPO($perso->po());
	echo $nain->__toString();
	if(file_exists('sections\outils\naheulbeukjdr\critere_metiers.php'))
	{
		include('sections\outils\naheulbeukjdr\critere_metiers.php');
	}
	//compétences ?
?>