<?php
$content = "SELECT PageTitle FROM `floor_content` WHERE PageTitle='Home'";
$result = mysqli_query($conn, $content);
while($row = mysqli_fetch_assoc($result)) {
	$string = $row['PageTitle'];
		echo "<title>$string</title>";
}
?>
<!-- Slideshow container -->
<div class="slideshow-container">
    <!-- Full-width images with number and caption text -->

    <div class="mySlides fade">
        <img src="images/hardwoodhome.jpg" style="width:100%">
        <div class="text">
            <h2>Engineered Hardwood</h2>
			<ul>
                <li class="black"><a href="?page=EngineeredHardwood" class="black">About This Floor</a></li>
            </ul>
        </div>
    </div>
    <!-- Full-width images with number and caption text -->

    <div class="mySlides fade">
        <img src="images/laminate-6.jpg" style="width:100%">
        <div class="text">
            <h2>Laminate</h2>
            <ul>
                <li class="black"><a href="?page=Laminate" class="black">About This Floor</a></li>
            </ul>
        </div>
    </div>

    <div class="mySlides fade">
        <img src="images/vinylplank3.jpg" style="width:100%">
        <div class="text">
            <h2>Vinyl Plank</h2>
            <ul>
                <li class="black"><a href="?page=VinylPlank" class="black">About This Floor</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Next and previous buttons -->

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>

<a class="next" onclick="plusSlides(1)">&#10095;</a>

<br>

<!-- The dots/circles -->
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>
<div class="bottomsection">
    <div class="wrapper">
        <h2>About Me</h2>
        <p>
			<?php
		$content = "SELECT PageContent FROM `floor_content` WHERE PageTitle='Home'";
		$result = mysqli_query($conn, $content);
		while($row = mysqli_fetch_assoc($result)) {
			$string = $row['PageContent'];
			$strings = explode("|", "$string");
			foreach ($strings as $string) {
				echo "<p>$string</p>";
			}
		}
		?>
	</p>
        <ul class="readmore-button">
            <li class="black"><a href="?page=About" class="black">Read More</a></li>
        </ul>
    </div>
</div>
<script src="js/slides.js"></script>
