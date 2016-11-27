<?php
	$barbare = new Barbare();
	$barbare->SetCOU($perso->cou());
	$barbare->SetAD($perso->ad());
	$barbare->SetINT($perso->int_());
	$barbare->SetFO($perso->fo());
	$barbare->SetCHA($perso->cha());
	$barbare->SetDestin($perso->destin());
	$barbare->SetATT($perso->att() + 1);
	$barbare->SetPRD($perso->prd() - 1);
	$barbare->SetPO($perso->po());
	echo $barbare->__toString();
	if(file_exists('sections\outils\naheulbeukjdr\critere_metiers.php'))
	{
		include('sections\outils\naheulbeukjdr\critere_metiers.php');
	}
	//compétences ?
?>