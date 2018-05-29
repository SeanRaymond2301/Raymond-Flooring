<div class="contactinfo">
	<?php
	$content = "SELECT PageContent FROM `floor_content` WHERE PageTitle='Contact Me'";
	$result = mysqli_query($conn, $content);
	while($row = mysqli_fetch_assoc($result)) {
		$string = $row['PageContent'];
		$strings = explode("|", "$string");
		foreach ($strings as $string) {
			echo "<h2>$string</h2>" . "<br>";
		}
	}
	?>
</div>

<div class="boxes">
  <form action="Contact.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="First name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Last name..">

    <label for="mail">Email</label>
    <input type="text" id="mail" name="email" placeholder="Email..">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Feedback/Question" style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
