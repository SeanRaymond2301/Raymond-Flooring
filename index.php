<?php
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
		if(file_exists("pages/$page.php"))
			formPage($page);
		else {
			formPage("DNE");
		}
	} else {
		formPage("home");
	}
	function formPage($page) {
		include("header.php");
		// echo "<title>$pageTitle</title>";
		echo "</head>";
		echo "<body id='$page'>";
		echo "<div class='space'></div>";
		include("pages/$page.php");
		echo "</body>";
		include("footer.php");
	}
?>
