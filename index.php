<?php 
	session_start();
	if (isset($_COOKIE['ultima_sesion'])){
		header('Location: /web_daco/'.$_COOKIE['ultima_sesion'].'/index.php');
	} else {
		setcookie('ultima_sesion', 'es', time() + 315636000, '/', false);
		header('Location: /web_daco/'.$_COOKIE['ultima_sesion'].'/index.php');
	}  
?> 