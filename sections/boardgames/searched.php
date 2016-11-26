<?php
	if(isset($_POST['duree']))
	{
		$duree = $_POST['duree'];
	}
	if(isset($_POST['nbr']))
	{
		$nbr = $_POST['nbr'];
	}
	if(isset($_POST['age']))
	{
		$age = $_POST['age'];
	}
	echo '<table>';
		echo '<tr>';		
			$i = 1;
			$jeu = new Boardgame("",0,0,0,0,0);
			$array = array();
			$array = $jeu->selectnames_search_activ($duree,$nbr,$age);
			foreach($array as $value)
			{
				echo '<td><a href="index.php?page=' . $value->name().'&type=jeu">' . $value->name().'</a></td>';
				if($i%5==0)
				{
		echo '</tr>';
		echo '<tr>';
				}	
				$i++;
			}	
		echo '</tr>';
	echo '</table>';
?>