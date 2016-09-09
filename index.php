<?php 
	session_start();
	if (isset($_COOKIE['ultima_sesion']))
	{
		header('Location:/'.$_COOKIE['ultima_sesion'].'/index.php');
	} else {
		setcookie('ultima_sesion', 'es', false, '/', 'dacotrans.com.gt');
		header('Location: /index.php');
	}
?> 