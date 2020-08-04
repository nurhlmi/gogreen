<?php
	session_start();
	if(isset($_SESSION['gogreen'])) {
		include "home.php";
	} else {
		include "index.html";
	}
?>