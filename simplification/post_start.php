<?php
	else if(isset($_POST['thelist']) && !empty(htmlspecialchars($_POST['thelist'])) && isset($_POST['pls']) && !empty($_POST['pls']))
	{
		if(file_exists("sections\start\gp.php"))
		{
			include("sections\start\gp.php");
		}
	}			
?>