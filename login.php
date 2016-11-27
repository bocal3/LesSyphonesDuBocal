<?php
	if(isset($_SESSION['login']) && !empty(htmlspecialchars($_SESSION['login'])))
	{
		
	}
	else
	{
		echo '<form method="post" action="index.php">';
			echo '<input type="text" name="login" id="login" placeholder="' . $login . '" /><br />';
			echo '<input type="password" name="password" id="password" placeholder="' . $password . '" /><br />';
			echo '<input type="submit" value="' . $login . '" /><br />';
			echo '<a href="index.php?page=alimpl">' . $inscription . '</a>';
		echo '</form>';
		
		
		
	}
	
	

?>