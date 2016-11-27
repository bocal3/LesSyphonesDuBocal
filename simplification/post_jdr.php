<?php
	if(isset($_POST['COU']) && !empty(htmlspecialchars($_POST['COU'])) && isset($_POST['AD']) && !empty($_POST['AD']) && isset($_POST['INT']) && !empty($_POST['INT']) && isset($_POST['FO']) && !empty($_POST['FO']) && isset($_POST['CHA']) && !empty($_POST['CHA']) && isset($_POST['DEST']) && !empty($_POST['DEST']) && isset($_POST['PO']) && !empty($_POST['PO']))
	{
		require 'class\outils\perso.class.php';
		$perso = new Perso();
		$perso->SetCOU($_POST['COU']);
		$perso->SetAD($_POST['AD']);
		$perso->SetINT($_POST['INT']);
		$perso->SetFO($_POST['FO']);
		$perso->SetCHA($_POST['CHA']);
		$perso->SetPO($_POST['PO']);
		$perso->SetDestin($_POST['DEST']);
		echo $perso->couadintfocha();
		if(file_exists('sections\outils\naheulbeukjdr\critere_origines.php'))
		{
			include('sections\outils\naheulbeukjdr\critere_origines.php');
		}
	}
	else if(isset($_POST['outilsD']) && !empty(htmlspecialchars($_POST['outilsD'])))
	{
		require 'class\outils\perso.class.php';
		require 'class\outils\d.class.php';
		$perso = new Perso();
		$d = new D(6);
		$perso->SetCOU($d->roll()+7);
		$perso->SetAD($d->roll()+7);
		$perso->SetINT($d->roll()+7);
		$perso->SetFO($d->roll()+7);
		$perso->SetCHA($d->roll()+7);
		$perso->SetPO(($d->roll()+$d->roll())*10);
		$d = new D(4);
		$perso->SetDestin($d->roll()-1);
		echo $perso->couadintfocha();
		if(file_exists('sections\outils\naheulbeukjdr\critere_origines.php'))
		{
			include('sections\outils\naheulbeukjdr\critere_origines.php');
		}
	}			
?>