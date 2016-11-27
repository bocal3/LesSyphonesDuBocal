<?php
	$orque = new Orque();
	$orque->SetCOU($perso->cou());
	$orque->SetAD($perso->ad());
	$orque->SetINT($perso->int_());
	$orque->SetFO($perso->fo());
	$orque->SetCHA($perso->cha());
	$orque->SetDestin($perso->destin());
	$orque->SetATT($perso->att()+1);
	$orque->SetPRD($perso->prd()-1);
	$orque->SetPO($perso->po());
	echo $orque->__toString();
	if(file_exists('sections\outils\naheulbeukjdr\critere_metiers.php'))
	{
		include('sections\outils\naheulbeukjdr\critere_metiers.php');
	}
	//compétences ?
?>