
<?php
// vim: set expandtab tabstop=4 shiftwidth=4 autoindent smartindent:
//---------------------------------------------------------
// CAPTAIN  SLOG
//---------------------------------------------------------
//
//	FILE:       content.php 
//	SYSTEM:     Ridolfis' new system 
//	AUTHOR:     Mark Addinall
//	DATE:       20/08/2014
//	SYNOPSIS:   Instead of burdening a simple little elegant system with a 
//              BIG FAT UGLY waste of time like JOOMLA!, DJANGO or WordPress,
//              we just stick in some content here that can be easily managed
//              with a TEXT EDITOR.
//
//              **** DO NOT USE WORD!!! ******
//
//------------+-------------------------------+------------
// DATE       |    CHANGE                     |    WHO
//------------+-------------------------------+------------
//
//



// First the header conten

$logo = "Lawrence Ridolfi";

$header_message = <<<END
"This is your message for the week/month/season area, hence it is in quotes.  You now own the TWO best LOOKING music sites on the web.  PLEASE for this one have a think about the content.  Even if you have to hire a content writer...Ta."
END;

// now before anyone starts screaming "USE AN ARRAY, OR AN OBJECT CONTAINING AN ARRAY, OR AN
// ARRAY OF OBJECTS",  I am not giving mu customer lessons in CompSci.  I want him, her or
// to easily understand that if you changed the text in paragraph one, it will reflect
// on the screen in paragraph one.  That is ALL I want this file to do.  So fuck off, weenies.

$header_paragraph = <<<END
Dunkle priming; crystal malt, " degrees plato top-fermenting yeast bacterial length mouthfeel." cask conditioning seidel heat exchanger sour/acidic mouthfeel lager hops. krausen berliner weisse dry stout yeast copper. 
END;

// This is the END of the HEADER CONTENT

// These are the various HEADINGS in the system
// If you want to INCREASE the number of paragraphs, you need to understand index.php

$sidebar_header = "Contact me!";

$heading_one    = "I'm serious as a heart attack";
$heading_two    = "Your bones don't break, mine do";
$heading_three  = "The trouble with Tribbles is";
$heading_four   = "And back in Parramatta";

$footer_heading = "Shoot that bitch in the kneecaps";

// This is the END of the HEADINGS
// If you want to get rid of one or more, make them an empty string = "";
// If you want to add more paragraphs, that is more complex.  Ask first!  ;-)


// This is the START of the SIDEBAR and MAIN CONTENT


$sidebar_paragraph = <<<END
Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they're actually proud of that shit.
END;

$paragraph_one = <<<END
Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? That's what you see at a toy store.
END;

$paragraph_two = <<<END
Face like a slapped arse. Bloomin' 'eck dahn t'coil oil soft southern pansy gi' o'er. Ee by gum what's that when it's at ooam appens as maybe michael palin mardy bum. Bloomin' 'eck ee by gum wacken thi sen up where's tha bin. Th'art nesh thee where there's muck there's brass that's champion soft southern pansy eeh chuffin' nora. Aye t'foot o' our stairs. Be reet ah'll learn thi ey up tha what where there's muck there's brass. Is that thine. Tha daft apeth ah'll gi' thi summat to rooer abaht wacken thi sen up god's own county michael palin tha what.
END;

$paragraph_three = <<<END
The game's not big enough unless it scares you a little. I think you've let your personal feelings cloud your judgement. We know you're dealing in stolen ore. But I wanna talk about the assassination attempt on Lieutenant Worf. The look in your eyes, I recognize it. You used to have it for me. I am your worst nightmare! Talk about going nowhere fast. Mr. Worf, you do remember how to fire phasers? Wait a minute - you've been declared dead. You can't give orders around here. 
END;

$paragraph_four = <<<END
We're going strewth when lets throw a truckie. He hasn't got a moolah flamin lets get some postie. Lets get some dropkick no worries as stands out like freckle. It'll be chuck a yewy flamin lets get some yabber. As busy as a turps as busy as a lippy.
END;

$footer_paragraph = <<<END
Lorizzle ipsum dolor check it out amizzle, go to hizzle adipiscing elit. Nullizzle bow wow wow phat, my shizz volutpat, get down get down quis, dope vel, own yo'. Pellentesque phat tortor. Sed funky fresh. Fusce izzle dolor dapibus pot tempizzle bow wow wow. Dope pellentesque nibh et shut the shizzle up. Break it down izzle dang. Pellentesque eleifend i saw beyonces tizzles and my pizzle went crizzle bling bling. In hac sizzle platea dope. Bow wow wow dapibizzle. Curabitur cool ass, pretium eu, mattizzle izzle, get down get down daahng dawg, nunc. Phat suscipizzle. Integer semper we gonna chung sizzle purus.
END;


// This next bit is in here because it is fucking ugly as, but really, really important.
// I would suggest that if you are the end customer, NOT to experiment with this
// lot.  Just assume it works and don't poke it.

$footer_legals = <<<END
&copy; 2014 <span class="license">Created by <a href="http://www.addinall.net/contact.php" target="_blank"><em>Mark Addinall</em></a> <span class="amp">&amp;</span><a href="http://www.crosscitydjs.com.au/?page_id=18" target="_blank"><em>Lawrence Ridolfi</em></a>  Using Chameleon V5.0 Web Toolset by Mark Addinall</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://twitter.com/share" class="twitter-share-button" data-via="Lawrence" data-size="large" data-related="Crosscitydjs" data-hashtags="crosscitydjs">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
END;


$footer_javascript = <<<END
    <!-- Minimized jQuery from Google CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <!-- HTML5 IE Enabling Script -->
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!-- CSS3 Media Queries -->
    <script src="js/respond.min.js"></script>
    <!-- Optimized Google Analytics. Change UA-XXXXX-X to your site ID -->
    <script>var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src='//www.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'))</script>
END;


// here at the wanky things to say about yourself, music
//


$wank_1 = "dedication";
$wank_2 = "balance";
$wank_3 = "creativity";
$wank_4 = "energetic";
$wank_5 = "electronic";
$wank_6 = "innovation";

?>
