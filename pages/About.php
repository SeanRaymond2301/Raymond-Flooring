<?php
$content = "SELECT PageTitle FROM `floor_content` WHERE PageTitle='About Me'";
$result = mysqli_query($conn, $content);
while($row = mysqli_fetch_assoc($result)) {
	$string = $row['PageTitle'];
		echo "<title>$string</title>";
}
?>
 <div class="about-container">

 <div class="portrait">

 </div>
   <div class="about-wrap-p">
   <h2 class="about-header" aria-atomic=""style="text-align:center;">About Me</h2>
    <p class="about-p">I started in the floor covering business with my dad installing carpet in 1985. I installed carpet with him until one day we opened a very small store. There I learned the supply and sales aspect of the flooring industry. In 1995 I left his business and started working for various companies. My knowledge of installing carpet was expanded throughout the years.</p>

    <p class="about-p">In 1999, I wanted to break out of carpet and attend school to learn how to install laminate flooring. When I finished attending school I obtained my California Contractor's License #768883. I started subcontracting work from my dad's store while going out and obtaining more accounts installing laminate flooring. Within a couple of years, I partnered up with a man who taught me how to install engineered hardwood flooring. We worked together for a while until the recession hit. At that time we went our separate ways.</p>


    <p class="about-p">Since then the market has shifted; vinyl plank or waterproof core flooring has become more popular. Vinyl plank installs just like laminate flooring so it was a natural fit for me. Today, my business is all about being honest and doing it right the first time. Unlike other labor shops that subcontract from retailers, I pride myself in getting the customer first. I educate them on the best choices for their home instead of selling them something they don't need. You won't just get a descriptive quote, but also an explanation of what it will take to do the job.</p>


    <p class="about-p">The future is all about keeping my business going in a positive direction, and my maintaining my customers' satisfaction and trust.</p>
    </div>
</div>
