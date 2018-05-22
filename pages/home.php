
<!-- Slideshow container -->
<div class="slideshow-container">
    <!-- Full-width images with number and caption text -->

    <div class="mySlides fade">
        <img src="images/hardwoodhome.jpg" style="width:100%">
        <div class="text">
            <h2>Engineered Hardwood</h2>
            <p>Engineered hardwood is real wood flooring, and very quiet.</p>
            <ul>
                <li class="black"><a href="?page=EngineeredHardwood" class="black">Read More</a></li>
            </ul>
        </div>
    </div>
    <!-- Full-width images with number and caption text -->

    <div class="mySlides fade">
        <img src="images/laminate-6.jpg" style="width:100%">
        <div class="text">
            <h2>Laminate</h2>
            <p>A hard surface, that mimics the look of real wood, but is the loudest of the three</p>
            <ul>
                <li class="black"><a href="?page=Laminate" class="black">Read More</a></li>
            </ul>
        </div>
    </div>

    <div class="mySlides fade">
        <img src="images/vinylplank3.jpg" style="width:100%">
        <div class="text">
            <h2>Vinyl Plank</h2>
            <p>Vinyl plank is the easiest to maintain, and the quietest of the three.</p>
            <ul>
                <li class="black"><a href="?page=VinylPlank" class="black">Read More</a></li>
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
        <p>I started in the flooring business with my dad installing carpet in 1985. I installed carpet with him until we opened a very small store. There I learned the supply and sales aspect of the flooring industry. In 1995 I left his business and started working for various companies. In 1995 I left his business and started... </p>
        <ul>
            <li class="black"><a href="?page=About" class="black">Read More</a></li>
        </ul>
    </div>
</div>
<script src="js/slides.js"></script>
<?php
        require hamburger.php
        ?>
<style>
    @media screen and (max-width: 1024px) {
       

        .nav {
            display: none;
        }
        
      

        .ham {
            
            height: 60px;
            line-height: 60px;
            border-bottom: 1px solid #dddddd;
            width: 100%;
             background-image: url(../images/header2.jpg)
        }

        .fa-bars {
            background: none;
            position: absolute;

            padding: 5px 15px 0px 15px;
            color: #000000;
            border: 0;
            font-size: 1.4em;

            top: 0;
            right: 0;
            cursor: pointer;
            outline: none;
            z-index: 10000000000000;
        }
    
        .fa-times {
            background: none;
            position: absolute;
            top: 0px;
            right: 0;
            cursor: pointer;
            outline: none;
            z-index: 10000000000000;
            color: #000000;
            border: 0;
            font-size: 3em;
        
          
        }

        .menu {
            z-index: 1000000;
            font-weight: bold;
            font-size: 0.8em;
            width: 100%;
            background: #f1f1f1;
            position: absolute;
            text-align: center;
            font-size: 12px;
        }
        .menu ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
            list-style-image: none;
        }
        .menu li {
            display: block;
            padding: 15px 0 15px 0;
        
        }
        .menu li:hover {
            display: block;
            background: #ffffff;
            padding: 15px 0 15px 0;
            
        }
        .menu ul li a {
            text-decoration: none;
            margin: 0px;
            color: #666;
        }
        .menu ul li a:hover {
            color: #666;
            text-decoration: none;
        }
       

</style>
