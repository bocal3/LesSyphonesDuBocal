<?php
	$ogre = new Ogre();
	$ogre->SetCOU($perso->cou());
	$ogre->SetAD($perso->ad());
	$ogre->SetINT($perso->int_());
	$ogre->SetFO($perso->fo());
	$ogre->SetCHA($perso->cha());
	$ogre->SetDestin($perso->destin());
	$ogre->SetATT($perso->att());
	$ogre->SetPRD($perso->prd());
	$ogre->SetPO($perso->po());
	echo $ogre->__toString();
	if(file_exists('sections\outils\naheulbeukjdr\critere_metiers.php'))
	{
		include('sections\outils\naheulbeukjdr\critere_metiers.php');
	}
	//compétences ?
?>