<?php
	$hybrid = new Hybrid("");
	$array = array();
	$array = $hybrid->search($_POST['search']);
	echo '<table>';
		echo '<tr>';		
			$i = 1;
			foreach($array as $value)
			{
				echo '<td><a href="index.php?page=' . $value->name().'&type=' . $value->type().'">' . $value->name().'</a></td>';
				if($i%5==0)
				{
		echo '</tr>';
		echo '<tr>';
				}	
				$i++;
			}	
		echo '</tr>';
	echo '</table>	';
?>