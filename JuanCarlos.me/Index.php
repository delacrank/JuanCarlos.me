<?php
    include('Includes/views.php');
    echo display_header('Home Page');
    echo display_navigation();
?>
<main>
    
<!-- Start slide show -->
<div class="slideshow-container">
  <div class="mySlides fade" style ="text-align: center">
    <img src="Images/web_design.jpeg" style="width:100%">
    <header class="web_design">
        <h1>Web Design</h1>
            <h2>The Art of Spacing</h2>
            <p>Typography</p>
            <p>Photography</p>
            <p>Illustration and Web Graphics</p>
    </header>
  </div>

  <div class="mySlides fade" style ="text-align: center">
    <img src="Images/lain.jpg" style="width:100%">
   <header class="anime">
        <h1>Anime</h1>
            <h2>Story through animation</h2>
            <p>Science fiction</p>
            <p>Political Theory</p>
            <p>Character Development</p>
    </header>
  </div>

  <div class="mySlides fade"  style ="text-align: center">
    <img src="Images/punchout1.jpg" style="width:100%">
    <header class="video_game">
        <h1>Retro Video Games</h1>
            <h2>Pixel Art</h2>
            <p>Chip Tune Music</p>
            <p>Immersive Plot Lines</p>
            <p>Stratgey and Role Playing</p>
    </header>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center" style ="text-align: center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<!-- End slide show -->
    
<div class = "row_one">
    <article class = "col_one">
    <h1>Web Design</h1>
    <img src ="Images/design.jpeg"/>
        <p>Learn about different ways to render information in aesthically pleasing ways. What graphic designers used to do for maganizes, newspapers, posters and advertising. Web designers are now doing this using text, images and graphics in order to draw an audience in to their platform.</p>
    </article>
    
    <article class = "col_two">
    <h1>Front-End Development</h1>
    <img src ="Images/programming2.jpeg"/>
        <p>Different tools for web developers to use in order to style, place, resize and render images, text and graphics. Understand the pros and cons of using javascript, css, and html. Learn when its better to use a framework like bootstrap or jquery. Understand what a CMS the different types available.
        </p>
    </article>
</div>
    
<div class = "row_two">
    <article class = "col_one">
    <h1>Anime</h1>
    <img src ="Images/kite.jpg"/>
        <p>Find out about the types of anime I grew up with. I'll go into depth of the different series of anime from fantasy, to science-fiction. Learn about certain anime movies that were extremely popular in their time and small obscure series that only lasted 1 or 2 seasons. </p>
    </article>
    
    
    <article class = "col_two">
    <h1>Retro Games</h1>
    <img src ="Images/double_dragon.jpeg"/>
        <p> Learn about classic games, which were every bit as challenging as they were fun and enjoyable. Many games built for the NES, SNES or Genesis had such high replayability, due to the sheer difficulty of the games.  As I child, I don't remember beating more then one or two titles. </p>
    </article>
</div>
    
<article class = "row_three">
    <h1>About me</h1>
    <img src ="Images/about_me.jpg"/>
        <p>I am a designer and developer here in Brooklyn, New York. I've been programming for over 5 years now. My hobbies consist of playing chess, bike riding, handball and of course watching anime. I no longer play video games because they consume too much of my time. However, I am interested in game development. In the past I've actually coded an entire game engine from scratch using C++ and SDL.</p>
    
        <p>I first became interested in computers back in 2008 when, I aquired an A+ certification to repair computers. Since then a great deal of my time has been spent in trying to understand how computers work and the many ways they serve people.</p>
    
        <p>I think web development is fun, but I also know how to program in low level languages such as assembly and C. What fascinates me the most is how humans can take simple ideas and concepts and build on them to such a great level of complexity. </p>
</article>
    
</main>

<?php 
    echo display_footer();
?>