<?php
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
		if(file_exists("pages/$page.php"))
			formPage($page);
		else {
			formPage("pages/DNE");
		}
	} else {
		formPage("home");
	}
	function formPage($page) {
		include("header.php");
		echo "</head>";
		echo "<body>";
		include("$page.php");
		echo "</body>";
		include("footer.php");
	}
?>
