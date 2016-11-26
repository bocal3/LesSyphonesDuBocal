<?php
	if(isset($_SESSION['login']) && !empty(htmlspecialchars($_SESSION['login'])))
	{
		
	}
	else
	{
		echo '<form method="post" action="index.php">';
			echo '<input type="text" name="login" id="login" placeholder="Login" /><br />';
			echo '<input type="password" name="password" id="password" placeholder="Password" /><br />';
			echo '<input type="submit" value="Login" /><br />';
			echo '<a href="index.php?page=alimpl">Inscription</a>';
		echo '</form>';
		
		
		
	}
	
	

?>