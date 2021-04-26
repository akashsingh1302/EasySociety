<?php
	session_start();
	unset($_SESSION["name"]);
	unset($_SESSION["username"]);
	session_destroy();
	header("Location:index.html");
?>