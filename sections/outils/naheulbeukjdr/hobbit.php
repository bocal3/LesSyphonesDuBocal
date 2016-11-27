<?php
	$hobbit = new Hobbit();
	$hobbit->SetCOU($perso->cou());
	$hobbit->SetAD($perso->ad());
	$hobbit->SetINT($perso->int_());
	$hobbit->SetFO($perso->fo());
	$hobbit->SetCHA($perso->cha());
	$hobbit->SetDestin($perso->destin());
	$hobbit->SetATT($perso->att());
	$hobbit->SetPRD($perso->prd());
	$hobbit->SetPO($perso->po());
	echo $hobbit->__toString();
	if(file_exists('sections\outils\naheulbeukjdr\critere_metiers.php'))
	{
		include('sections\outils\naheulbeukjdr\critere_metiers.php');
	}
	//compétences ?
?>