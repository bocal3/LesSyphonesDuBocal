<?php
	if(file_exists("sections\boardgames\boardgames.php"))
	{
		include("sections\boardgames\boardgames.php");
	}
	if(file_exists("sections\boardgames\bg.php"))
	{
		include("sections\boardgames\bg.php");
	}
	if(file_exists("sections\boardgames\bg\\" . $_GET['page']. ".php"))
	{
		include("sections\boardgames\bg\\" . $_GET['page']. ".php");
	}			
?>