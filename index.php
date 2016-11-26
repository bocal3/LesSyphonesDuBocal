<!DOCTYPE html>
<?php
	session_start();
	echo '<html>';
    	echo '<head>';
        	echo '<meta charset="utf-8" />';
        	echo '<link rel="stylesheet" href="style.css" />';
        	echo '<title>Les syphonés du bocal - Jouons à la maison</title>';
    	echo '</head>';
    	echo '<body>';
        	echo '<div id="bloc_page">';
				if(file_exists("header.php"))
				{
					include("header.php");
				}
				if(file_exists("body.php"))
				{
					include("body.php");
				}
				if(file_exists("footer.php"))
				{
					include("footer.php");
				}
        	echo '</div>';
    	echo '</body>';
	echo '</html>';
?>
