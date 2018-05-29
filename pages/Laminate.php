<title>
	<?php
	require('data-conn.php');
	$title = "SELECT PageTitle FROM `floor-web-content` WHERE PageTitle='Laminate'";
	$result = mysqli_query($conn, $title);
	while($row = mysqli_fetch_assoc($result)) {
		echo $row['PageTitle'];
	}
	?>
</title>
<body>
<main class="content">
	<div style="background-image: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2)), url(images/laminate-2-4.jpg); width: 100%; height: 570px;">
		<h2 style="text-align:center;" class="headerText">Laminate</h2>
	</div>
	<div style="width:40%; margin: 0 auto;">
	<div class="wrap">
<div class="comp headerText2">
	<h3>Pros</h3>
	<ul class="perfect">
	    <li>Hard Surface</li>
	    <li>Hard to Damage</li>
	    <li>Looks Real</li>
	</ul>
    </div>

<div class="comp headerText3">
	<h3>Cons</h3>
	<ul class="perfect">
	    <li>Loudest of the Three</li>
	    <li>Susceptible to water damage.</li>
	    <li>Expands and Contracts</li>
	</ul>
        </div>
    </div>
    </div>
    <div class="w50ma">
		<?php
		$content = "SELECT PageContent FROM `floor-web-content` WHERE PageTitle='Laminate'";
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
<style>
@media screen and (max-width: 480px) {

	.w50ma {
		float: inherit;
		text-align: center;
	}
}
</style>
</body>
