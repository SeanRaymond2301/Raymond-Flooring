<?php
$content = "SELECT PageTitle FROM `floor-web-content` WHERE PageTitle='Contact Me'";
$result = mysqli_query($conn, $content);
while($row = mysqli_fetch_assoc($result)) {
	$string = $row['PageTitle'];
		echo "<title>$string</title>";
}
?>
<div class="contactinfo">

	<?php
	$content = "SELECT PageContent FROM `floor-web-content` WHERE PageTitle='Contact Me'";
	$result = mysqli_query($conn, $content);
	while($row = mysqli_fetch_assoc($result)) {
		$string = $row['PageContent'];
		$strings = explode("|", "$string");
		foreach ($strings as $string) {
			echo "<h2>$string</h2>";
		}
	}
	?>
</div>

<div class="boxes">
  <form action="Contact.php">

    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Name..">

    <label for="mail">Email</label>
    <input type="text" id="mail" name="email" placeholder="Email..">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Feedback/Question" style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
