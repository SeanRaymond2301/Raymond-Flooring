<?php
require("pages/data-conn.php");
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
		if(file_exists("pages/$page.php")) {
			formPage($page);
		}
		else {
			formPage("DNE");
		}
	} else {
		formPage("home");
	}
	function formPage($page) {
		global $conn;
		include("pages/header.php");
		echo "</head>";
		echo "<body id='$page'>";
		echo "<div class='space'></div>";
		include("pages/$page.php");
		echo "</body>";
		include("pages/footer.php");
	}
?>
