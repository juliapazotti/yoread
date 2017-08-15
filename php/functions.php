<?php 
	session_start();
	
	function seguranca() {
		if($_SESSION['user']['username'] == null) {
			header("Location: index.html");
		}
	}