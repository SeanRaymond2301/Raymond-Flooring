<main class="content">
    <div style="background-image: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2)), url(images/vinyl-plank-3-edit.png); width: 100%; height: 570px;">

        <h2 style="text-align:center;" >Vinyl Plank</h2>

        <h2 style="text-align:center;">Vinyl Plank</h2>
    </div>
<div style="width:40%; margin: 0 auto;">
   <div class="wrap">
   <div class="comp headerText2">
    <h3>Pros</h3>
    <ul class="perfect">
        <li>Waterproof.</li>
        <li>Very quiet.</li>
        <li>Easiest to maintain.</li>
    </ul>
       </div>

<div class="comp headerText3">
    <h3>Cons</h3>
    <ul class="perfect">
        <li>Easy to scratch.</li>
        <li>Really soft.</li>
    </ul>
       </div>
    </div>
    </div>
    <div class="w50ma">
		<?php
		require('data-conn.php');
		$content = "SELECT PageContent FROM `floor-web-content` WHERE PageTitle='Vinyl Plank'";
		$result = mysqli_query($conn, $content);
		while($row = mysqli_fetch_assoc($result)) {
			$string = $row['PageContent'];
			$strings = explode("|", "$string");
			foreach ($strings as $string) {
				echo "<p>$string</p>";
			}
		}
		?>
    </div>
</main>
