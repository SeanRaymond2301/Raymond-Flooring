<?php
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
		if(file_exists("pages/$page.php"))
			formPage($page);
		else {
			formPage("DNE");
		}
	} else {
		formPage("Home");
	}
	function formPage($page) {
		include("header.php");
		echo "<title>$page</title>";
		echo "</head>";

		echo "<body id='$page'>";
		include("pages/$page.php");

		echo "</body>";
		include("footer.php");
	}
?>
