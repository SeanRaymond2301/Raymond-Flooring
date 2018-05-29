<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

</head>


<header>
    <nav>
        <nav>
            <div class="logo imglogo"></div>
            <div class="nav">
				<ul class="navul">
				<?php
				$content = "SELECT NavTitle FROM `floor-web-content`";
				$result = mysqli_query($conn, $content);
				while($row = mysqli_fetch_assoc($result)) {
					$string = $row['NavTitle'];
					$strings = explode("|", "$string");
					foreach ($strings as $string) {
						$nav = str_replace(' ', '', $string);
						echo "<a href='?page=$nav'><li>$string</li></a>";
					}
				}
				?>

            </ul>
            <div class="wrapper2">
                <p class="lic-info">Matthew Raymond</p>
                <p class="lic-info2">License #768883</p>
            </div>
        </div>
    </nav>
    </nav>
</header>
