<?php
$content = "SELECT PageTitle FROM `floor_content` WHERE PageTitle='Vinyl Plank'";
$result = mysqli_query($conn, $content);
while($row = mysqli_fetch_assoc($result)) {
	$string = $row['PageTitle'];
		echo "<title>$string</title>";
}
?>
<main class="content">

    <div style="background-image: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2)), url(images/vinyl-plank-3-edit.jpg); width: 100%; height: 570px;">

<div class= "headerbox">
        <h2 style="text-align:center;" class= "headerText">Vinyl Plank</h2>
</div>
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
		$content = "SELECT PageContent FROM `floor_content` WHERE PageTitle='Vinyl Plank'";
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
