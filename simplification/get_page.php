<?php
	$page=$_GET['page'];
	if(file_exists("simplification\get_page_menu.php"))
	{
		include("simplification\get_page_menu.php");
	}
	else if(file_exists("simplification\get_page_jdr.php"))
	{
		include("simplification\get_page_jdr.php");
	}
	else if(file_exists("simplification\get_page_alim.php"))
	{
		include("simplification\get_page_alim.php");
	}
	else if(file_exists("simplification\get_page_search.php"))
	{
		include("simplification\get_page_search.php");
	}			
?>