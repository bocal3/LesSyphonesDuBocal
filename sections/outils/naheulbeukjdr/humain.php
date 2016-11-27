<?php
	$humain = new Humain();
	$humain->SetCOU($perso->cou());
	$humain->SetAD($perso->ad());
	$humain->SetINT($perso->int_());
	$humain->SetFO($perso->fo());
	$humain->SetCHA($perso->cha());
	$humain->SetDestin($perso->destin());
	$humain->SetATT($perso->att());
	$humain->SetPRD($perso->prd());
	$humain->SetPO($perso->po());
	echo $humain->__toString();
	if(file_exists('sections\outils\naheulbeukjdr\critere_metiers.php'))
	{
		include('sections\outils\naheulbeukjdr\critere_metiers.php');
	}
	echo '<p>Sinon, vous pouvez être sans métier.</p>';
	//compétences ?
?>