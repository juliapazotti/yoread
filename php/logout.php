<?php
	session_start();
	$_SESSION['user']['username'] = null;
	$_SESSION['user']['nome'] = null;
	$_SESSION['user']['sobrenome'] = null;
	header("Location: ../index.html");
?>