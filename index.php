<!DOCTYPE html>
<html lang="en">
<!--
 vim: set expandtab tabstop=4 shiftwidth=4 autoindent smartindent:
// CAPTAIN  SLOG
//
//  FILE:       index.php 
//  SYSTEM:     New page for Ridolfi 
//  AUTHOR:     Mark Addinall
//  DATE:       19/08/2014
//  SYNOPSIS:   In the words of Ray Charles, "an I guess I'll take
                another IOU...."

    This page in all of it's manifistations is RESPONSIVE and FLUID.
    It will work on a PC, Fondleslab or telephone.  Perhaps not a
    Rotary Telephone.

    Everything in this site is built responsive from the ground up,
    the slider, the forms, image containers, movie containers.

    20/08/2014 -    Changed the file from .html to .php to indicate that we will
                    now be managing the content through some VERY simplistic
                    PHP inline code.  This gives Apache for warning to load the
                    PHP modules, speeding processing.
    21/08/2014 -    Looks pretty much finished to me.  CSS is pretty hoopy!  That
                    was a 37 hour shift!!!!  Too tired to sleep!!
-->

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="description" content="A web site created for me.">
<meta name="keywords"  content="HTML5, CSS3, PHP, Responsive, Fluid, Web, Design, Modern">
<meta name="author" content="Mark Addinall.  Brisbane. Australia">
<meta name="robots" content="all">

<title>Lawrence Ridolfi</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>


    
<!-- Place favicon.ico and apple-touch-icon.png in root directory -->
        
<link href="css/style.css" rel="stylesheet" />
<link href="css/lawrence.css" rel="stylesheet" />

<link rel="stylesheet" type="text/css" href="css/style2.css" />
<link rel="stylesheet" href="AudioPlayer/css/audioplayer.css" />

<script src="AudioPlayer/js/jquery.js"></script>
<script src="AudioPlayer/js/audioplayer.js"></script>

<script>$( function() { $( 'audio' ).audioPlayer(); } );</script>

<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>


<?php require("content.php");   ?>



</head>

<body id="page">
    <ul class="cb-slideshow">
        <li><span>Image 01</span><div><h3><?php echo $wank_1; ?></h3></div></li>
        <li><span>Image 02</span><div><h3><?php echo $wank_2; ?></h3></div></li>
        <li><span>Image 03</span><div><h3><?php echo $wank_3; ?></h3></div></li>
        <li><span>Image 04</span><div><h3><?php echo $wank_4; ?></h3></div></li>
        <li><span>Image 05</span><div><h3><?php echo $wank_5; ?></h3></div></li>
        <li><span>Image 06</span><div><h3><?php echo $wank_6; ?></h3></div></li>
    </ul>

    <header>
        <div class="g1">
            <h1><?php echo $logo;  ?></h1>
        </div>
        <div class="g2">
            <p></p>
            <h5>
            <?php echo $header_message; ?>
            </h5>
        </div>
        <div class="g2">
            <p>
            <?php echo $header_paragraph; ?>
            </p>
        </div>
    </header>
    <div class="cf"></div>
    <div id="content">
        <div class="g1">
            <h3><?php echo '<a href="http://www.crosscitydjs.com.au/?page_id=18" target="_blank">' . $sidebar_header . "</a>"; ?></h3>
            <p>
                <?php echo $sidebar_paragraph; ?>
            </p>

    <!-- That was the end of the actual HUMAN editable content for the sidebar.
        In this installation the rest of this sidebar is full of AUDIO machines.
        It might not be a great idea to edit them unless you are pretty sure
        of what is going on!  -->

<!--
// MUSIC.  Now, you have five slots.  If you need more we need to think about the
// screen real estate and geometry, and not just slap things in willy-nilly.
// To make the music compatible over ALL browsers and operating system you
// should take the time to make OGG and WAV audio files as well as MP3.
// Not all browsers will play an MP3.  You be like "I'm an audio engineer, I can do dat"
//
// here is a good place to do the converts.  They ask for a $1.90 donation.
// I am good with that.  You can upload all at the same time in a batch and the thing
// works (which makes a change).
//
// http://media.io/
-->
            <h5>Juicy</h5>
            <p>
                <audio preload="none" controls>
                    <source src="AudioPlayer/audio/juicy.mp3">
                    <source src="AudioPlayer/audio/juicy.ogg">
                    <source src="AudioPlayer/audio/juicy.wav">
                </audio>
            </p>
            <h5>Boss Nigger</h5>
            <p>
                <audio preload="none" controls>
                    <source src="AudioPlayer/audio/bn.mp3"> 
                    <source src="AudioPlayer/audio/bn.ogg"> 
                    <source src="AudioPlayer/audio/bn.wav"> 
                </audio>
            </p>
            <h5>Hunger Games</h5>
            <p>
                <audio preload="none" controls>
                    <source src="AudioPlayer/audio/dghg.mp3"> 
                    <source src="AudioPlayer/audio/dghg.ogg"> 
                    <source src="AudioPlayer/audio/dghg.wav"> 
                </audio>
            </p>
            <h5>Circles</h5>
            <p>
                <audio preload="none" controls>
                    <source src="AudioPlayer/audio/KDrew_Circles.mp3"> 
                    <source src="AudioPlayer/audio/KDrew_Circles.ogg"> 
                    <source src="AudioPlayer/audio/KDrew_Circles.wav"> 
                </audio>
            </p>
            <h5>(FourFlossFive)Six</h5>
            <p>
	            <audio preload="none" controls>
		            <source src="AudioPlayer/audio/BlueDucks_FourFlossFiveSix.mp3">
		            <source src="AudioPlayer/audio/BlueDucks_FourFlossFiveSix.ogg">
		            <source src="AudioPlayer/audio/BlueDucks_FourFlossFiveSix.wav">
	            </audio>
            </p>
        </div>

        <!-- That is the end of the side bar.  REMEMBER, this is a FLUID and
             RESPONSIVE GRID system that will allocate space as it sees available.
             The bit we just finished behaves as a LEFT SIDE BAR on full size
             system!!!   -->


        <div class="g2">
            <h3><?php echo $heading_one; ?></h3>
            <p>
                <?php echo $paragraph_one; ?>
            </p>
            <h3><?php echo $heading_two; ?></h3>
            <p>
                <?php echo $paragraph_two; ?>
            </p>
            <h3><?php echo $heading_three; ?></h3>
            <p>
                <?php echo $paragraph_three; ?>
            </p>
            <h3><?php echo $heading_four; ?></h3>
            <p>
                <?php echo $paragraph_four; ?>
            </p>
        </div>
        <div class="g3">
            <h3><?php echo $footer_heading; ?></h3>
            <p>
                <?php echo $footer_paragraph; ?>
            </p>
        </div>
    </div>
    <footer class="g3 cf">
        <hr>
            <?php echo $footer_legals; ?>
        <hr>
    </footer>

    <!-- JavaScript at the bottom for fast page loading -->

    <?php echo $footer_javascript; ?>

</body>
</html>
