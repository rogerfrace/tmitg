<?php require_once "functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - live performances</title>
	<meta name="description" content="the Machine in the Garden upcoming live shows and list of past shows.">
	<meta name="copyright" content="<?=date('Y',time());?>">
	<?php include_once "headers-additional.php"; ?>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/sticky-table-headers/0.1.24/js/jquery.stickytableheaders.min.js" integrity="sha512-Y4nnCsylqqK1jfmGLzXdbp1f8bp/FRHUUw1DH5nQU4FZjqkZcm0jshuOjDmmcU2iE0+uhm7bTXAHGeTi1yxfeQ==" crossorigin="anonymous"></script>  <script>
	jQuery(document).ready(function() {
		$('table#liveTable').stickyTableHeaders();
	});
	</script>

	<link rel="stylesheet" type="text/css" href="tmitg.css">
	<?php include_once "googletracking.html"; ?>
</head>

<body id="live">
	<span id="skip-links">
		<a class="wai" href="#main">Skip to Main</a>
	</span>

<?php get_header(); ?>

<main id="main" class="mainbody">

<section>
<h1>Upcoming Live Performances:</h1>

<!--<p class="notopmargin"><b>Saturday, November 30, 2013</b>
<br /><b>Austin, TX</b>
<br /><a href="http://www.elysumonline.net/" target="_parent">Elysium</a>
<br />705 Red River, Austin, TX
<br />with <a href="http://www.egolikeness.com/" target="_blank">Ego Likeness</a> (12am), <a href="https://www.facebook.com/pages/Servitor/344543773871" target="_blank">Servitor</a> (11pm) and <a href="https://www.facebook.com/XBRMNT" target="_blank">XBRMNT</a> (9pm)
<br />Doors open at 8 PM &bull; Show Starts at 8 PM &bull; $9 in advance &bull; $14 at the door &bull; 18+
<br /><a href="https://www.facebook.com/events/323911431084405/" target="_blank">View the Facebook Event</a>
<br />tMitG is scheduled for 10pm.</p>-->

<p>No live shows are scheduled at this time.</p>

<p>Interested in booking the Machine in the Garden? Please <a href="contact.php">contact us</a>.</p>
</section>

<hr>

<section>
<h1>Past Live Performances:</h1>

<!-- google map stuff -->
<!--<div id="map_canvas" style="width: 100%; height: 300px" role="presentation" aria-hidden="true"></div>-->
<!-- end google map -->

<div class="tblwrap">
<!-- paste below here -->
<table id="liveTable">
  <caption class="wai">tMitG Shows List:</caption>
  <col class="col1">
  <col class="col2">
  <col class="col3">
  <col class="col4">
  <col class="col5">
  <col class="col6">

<thead>
 <tr>
  <th class="header" scope="col">date</th>
  <th class="header" scope="col">city</th>
  <th class="header" scope="col">venue</th>
  <th class="header" scope="col">other bands</th>
  <th class="header" scope="col">songs played</th>
  <th class="header" scope="col">notes</th>
 </tr>
</thead>

<tbody>
  <tr>
  <th scope="row"><time datetime="2013-11-30">November 30, 2013</time></th>
  <td>Austin, TX</td>
  <td>Elysium</td>
  <td>Ego Likeness, Servitor, XBRMNT</td>
  <td>Cimmerian, The Inside World, Scathefire, Masks, Mental Wasteland, In the Vanir, Spider's Bride, Final Form</td>
  <td>&nbsp;</td>
 </tr>

  <tr>
  <th scope="row"><time datetime="2008-03-01">March 1, 2008</time></th>
  <td>Austin, TX</td>
  <td>Secret Oktober</td>
  <td>Mirabilis</td>
  <td>Every Thing She Is, One, A Touch of Heaven, The Sleep of Angels, Walls, Valentine, Nowhere, Otherworld</td>
  <td>semi-acoustic guitar/vox only; release party for <i>XV</i> and <i>Sub Rosa</i>; first ever Mirabilis show</td>
 </tr>

  <tr>
  <th scope="row"><time datetime="2007-08-19">August 19, 2007</time></th>
  <td>Austin, TX</td>
  <td>Red Eyed Fly</td>
  <td>Sunshine Helicopters, Esther LaVonne Band, Gobi</td>
  <td>The Inside World, This Silence, Wonderland, Spider's Bride, Control, Open, Icarus, Mental Wasteland, Suspend</td>
  <td>&nbsp;</td>
 </tr>

  <tr>
  <th scope="row"><time datetime="2007-02-09">February 9, 2007</time></th>
  <td>Austin, TX</td>
  <td>Elysium</td>
  <td>&nbsp;</td>
  <td>The Inside World, Masks, This Silence, Wonderland, Spider's Bride, Seek, Control, Final Form, On the Wire, A Touch of Heaven</td>
  <td>&nbsp;</td>
 </tr>

 <tr>
  <th scope="row"><time datetime="2006-11-24">November 24, 2006</time></th>
  <td>Austin, TX</td>
  <td>Elysium</td>
  <td>Attrition, High Blue Star, subNatural</td>
  <td>The Inside World, Control, Echo, Spider's Bride, This Silence, Final Form, Need-Fire, Suspend</td>
  <td>&nbsp;</td>
 </tr>

 <tr>
  <th scope="row"><time datetime="2006-06-30">June 30, 2006</time></th>
  <td>Austin, TX</td>
  <td>Elysium</td>
  <td>Voltaire, The Brobdingnagian Bards</td>
  <td>Winter Fell, This Silence, Wonderland, Hide Away, The Inside World, Valentine, Final Form, Far From Home, Scarborough Fair</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="2006-03-18">March 18, 2006</time></th>
  <td>Houston, TX</td>
  <td>HaVoK @ Club Middle Earth</td>
  <td>The Birthday Massacre, Since the Ashes</td>
  <td>The Inside World, A Touch of Heaven, Control, Wonderland, This Silence, Spider's Bride, Final Form, Seek</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="2005-09-17">September 17, 2005</time></th>
  <td>Charlottesville, VA</td>
  <td>The Dawning @ The Outback Lodge</td>
  <td>Heaven Falls Hard</td>
  <td>The Inside World, Control, Final Form, Winter Fell, Clarity The Sleep of Angels, Masks, This Silence, Words in Heaven Lost, Suspend, Photographic (encore)</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="2005-09-16">September 16, 2005</time></th>
  <td>Louisville, KY</td>
  <td>Main Street Lounge</td>
  <td>&nbsp;</td>
  <td>The Inside World, Open, Winter Fell, This Silence, A Touch of Heaven, Outside, Control, Masks, Seek, Final Form, Suspend</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="2005-09-15">September 15, 2005</time></th>
  <td>Nashville, TN</td>
  <td>Hair of the Dog</td>
  <td>The Last Dance, Simple Shelter</td>
  <td>The Inside World, Control, This Silence, A Touch of Heaven, Winter Fell, Final Form, Suspend</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="2005-09-13">September 13, 2005</time></th>
  <td>Champaign, IL</td>
  <td>Subversion @ The Highdive</td>
  <td>&nbsp;</td>
  <td>The Inside World, Open, Winter Fell, This Silence, Outside, Control, Masks, Seek, Final Form, Suspend</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="2005-08-20">August 20, 2005</time></th>
  <td>Austin, TX</td>
  <td>End of an Ear</td>
  <td>&nbsp;</td>
  <td>This Silence, Valentine, Cold, Illusions in Rain, Seraph, The Sleep of Angels, Falling into the Sea, Far From Home, Oh Dear, Every Thing She Is, Dreams of the Absent, Hide Away, Photographic</td>
  <td>a semi-acoustic in-store performance</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="2005-06-12">June 12, 2005</time></th>
  <td>Houston, TX</td>
  <td>HaVoK</td>
  <td>Asmodeus X</td>
  <td>The Inside World, Masks, Control, This Silence, Outside, A Touch of Heaven, Winter Fell, Final Form, Suspend</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="2005-05-20">May 20, 2005</time></th>
  <td>Dallas, TX</td>
  <td>The Cavern</td>
  <td>Bloodwire, Hungry Lucy</td>
  <td>The Inside World, Open, Control, Winter Fell, Outside, This Silence, Words in Heaven Lost, Final Form, Suspend</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="2005-05-06">May 6, 2005</time></th>
  <td>Austin, TX</td>
  <td>Elysium</td>
  <td>Hollow, Jasmine Reign</td>
  <td>The Inside World, Open, Control, Winter Fell, Outside, This Silence, Words in Heaven Lost, FInal Form, Suspend, The Sleep of Angels (encore, no backing track)</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="2005-04-23">April 23, 2005</time></th>
  <td>San Diego, CA</td>
  <td>Convergence 11 @ 4th &amp; B</td>
  <td>&nbsp;</td>
  <td>The Inside World, Masks, Control, Open, This Silence, Winter Fell, Radiant, Final Form</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="2004-08-30">August 30, 2004</time></th>
  <td>Austin, TX</td>
  <td>Elysium</td>
  <td>Faith and the Muse, Hollow</td>
  <td>Open, Masks, The Sleep of Angels, Outside, Every Thing She Is, CryGods, Icarus, Final Form, Radiant, Suspend</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="2004-05-06">May 6, 2004</time></th>
  <td>Austin, TX</td>
  <td>Elysium</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="2002-10-25">October 25, 2002</time></th>
  <td>Austin, TX</td>
  <td>Elysium</td>
  <td>Lucid Dementia, CTRL</td>
  <td>Masks, Control, Outside, Open, Lost In Side, Clarity, Intrigue, Time, Final Form, Seek, Photographic</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="2002-03-29">March 29, 2002</time></th>
  <td>New Orleans, LA</td>
  <td>GothCon</td>
  <td>&nbsp;</td>
  <td>Masks, Control, Outside, Radiant, The Sleep of Angels, Open, Valentine, Clarity, Final Form, Seek, Photographic</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="2001-11-10">November 10, 2001</time></th>
  <td>Los Angeles, CA</td>
  <td>Bar Sinister</td>
  <td>&nbsp;</td>
  <td>Her Face, Control, Final Form, CryGods, Tears, The Sleep of Angels, Cold, Masks, Radiant, Photographic</td>
  <td>Dru (Mirabilis, This Ascension, Falling You) performed the Mirabilis song "Tears" and sang back-up on "The Sleep of Angels."</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="2001-10-13">October 13, 2001</time></th>
  <td>New York, NY</td>
  <td>CMJ @ Downtime</td>
  <td>&nbsp;</td>
  <td>Her Face, Control, Final Form, CryGods, Far From Home, Valentine, Cold, Ex Oblivione, Radiant, Masks, Photographic</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="2001-04-14">April 14, 2001</time></th>
  <td>San Francisco, CA</td>
  <td>Shrine of Lillith</td>
  <td>&nbsp;</td>
  <td>Intrigue, Rusty Haloes, Control, The Unaware, Words in Heaven Lost, Cut Me, Failure, The Sleep of Angels, Her Face, CryGods,
  Photographic</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="2001-04-13">April 13, 2001</time></th>
  <td>Los Angeles, CA</td>
  <td>Antiquity@ The Gig</td>
  <td>&nbsp;</td>
  <td>Intrigue, Rusty Haloes, Lost In Side, The Unaware, Her Face, Failure, Control, Radiant, Photographic</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="2000-12-02">December 2, 2000</time></th>
  <td>New York, NY</td>
  <td>Batcave @ Downtime</td>
  <td>&nbsp;</td>
  <td>Intrigue, The Unaware, Control, Valentine, Her Face, Words in Heaven Lost, Rusty Haloes, Every Thing She Is, Oh Dear, Failure, The Sleep of Angels, Radiant, Final Form</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="2000-07-29">July 29, 2000</time></th>
  <td>Denton, TX</td>
  <td>Rick's Place</td>
  <td>Faith and the Muse, Hollow Girl</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="1999-07-18">July 18, 1999</time></th>
  <td>New York, NY</td>
  <td>Mother</td>
  <td>Mors Syphilitica</td>
  <td>Words in Heaven Lost, Falling Too, Her Face,
  Valentine, Final Form, A Touch of Heaven, Midnight, Control, Radiant</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="1999-07-17">July 17, 1999</time></th>
  <td>Newark, NJ</td>
  <td>QXT</td>
  <td>&nbsp;</td>
  <td>Control, A Touch of Heaven, Falling Too, Final Form,
  Lost In Side, Cut Me, Spider's Bride, Primevil</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="1999-07-03">July 3, 1999</time></th>
  <td>San Antonio, TX</td>
  <td>The Wild Club</td>
  <td>Nocturne, Paris By Night, Margot Day</td>
  <td>&nbsp;</td>
  <td>Midsummer Nyte Scream Tour</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="1999-07-02">July 2, 1999</time></th>
  <td>Austin, TX</td>
  <td>Atomic Caf&eacute;</td>
  <td>Nocturne, Paris By Night, Margot Day</td>
  <td>&nbsp;</td>
  <td>Midsummer Nyte Scream Tour</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="1999-06-30">June 30, 1999</time></th>
  <td>Dallas, TX</td>
  <td>Curtain Club</td>
  <td>Nocturne, Paris By Night, Margot Day</td>
  <td>&nbsp;</td>
  <td>Midsummer Nyte Scream Tour</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="1999-06-27">June 27, 1999</time></th>
  <td>Boulder, CO</td>
  <td>Millenium</td>
  <td>Nocturne, Paris By Night, Margot Day</td>
  <td>&nbsp;</td>
  <td>Midsummer Nyte Scream Tour</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="1998-11-06">November 6, 1998</time></th>
  <td>San Antonio, TX</td>
  <td>The Wild Club</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="1998-05-12">May 12, 1998</time></th>
  <td>Denver, CO</td>
  <td>7 South</td>
  <td>Babylonian Tiles</td>
  <td>Words in Heaven Lost, Control, A Touch of Heaven, The Sleep of Angels, Final Form, Dreams of the Absent, CryGods, Shadowy Depths, The Hanging Garden, Cold</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="1998-04-25">April 25, 1998</time></th>
  <td>Denver, CO</td>
  <td>The Snakepit</td>
  <td>The Electric Hellfire Club</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="1998-02-27">February 27, 1998</time></th>
  <td>Englewood, CO</td>
  <td>Borders Books and Music</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>a semi-acoustic in-store performance, we don't have
  the exact date</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="1997-10-14">October 14, 1997</time></th>
  <td>Denver, CO</td>
  <td>Area 39</td>
  <td>Lycia</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="1997-08-21">August 21, 1997</time></th>
  <td>Boulder, CO</td>
  <td>Millenium</td>
  <td>Filmstrip, Generation Excuse, Skull Flux</td>
  <td>Primevil, A Touch of Heaven, Oblician, Conception, Bloody Murder, Dark Splintered Heart, Spider's Bride, Cut Me, Final Form</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="1997-08-15">August 15, 1997</time></th>
  <td>Denver, CO</td>
  <td>7 South</td>
  <td>Autumn, Filmstrip</td>
  <td>Final Form, Lost In Side, A Touch of Heaven, The Sleep of Angels, CryGods, Corpus Christi, Dreams of the Absent, Cut Me,
  Heavenly Air</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="1997-03-29">March 29, 1997</time></th>
  <td>San Francisco, CA</td>
  <td>Sanctuary</td>
  <td>Healthy Morbidity</td>
  <td>Fates and Furies, A Touch of Heaven, The Sleep of Angels, CryGods, Seraph, Lost In Side, Cut Me, Spider's Bride, Corpus Christi, Final Form, Io's Departure</td>
  <td>Summer's first show with tMitG</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="1996-06-02">June 2, 1996</time></th>
  <td>Toronto, ON</td>
  <td>Savage Garden</td>
  <td>State of Grace</td>
  <td>Spiritus ex Obitus Sanctus (intro), A Touch of Heaven, The Sleep of Angels, Lost in Side, CryGods, Seraph, Dreams of the Absent, Oblician, Cut Me, Spider's Bride, Primevil, Heavenly Air (crunchmix), A Stagnant Pale Reflection, Corpus Christi, Walls, Io's Departure</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="1996-03-31">March 31, 1996</time></th>
  <td>Albany, NY</td>
  <td>QE2</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>post-thesis performance</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="1995-11-19">November 19, 1995</time></th>
  <td>Pittsburgh, PA</td>
  <td>WRCT Radio</td>
  <td>&nbsp;</td>
  <td>A Touch of Heaven, Cut Me, CryGods, Seraph, Oblician, The Sleep of Angels, Heavenly Air</td>
  <td>Live-in-Studio recording for a radio show</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="1995-11-18">November 18, 1995</time></th>
  <td>Pittsburgh, PA</td>
  <td>Bloomfield Bridge Tavern</td>
  <td>Apocalypse Theatre, Vampire Nation</td>
  <td>Spiritus ex Obitus Sanctus, The Sleep of Angels, A Touch of Heaven, CryGods, Existential Sonnet, Lost In Side, Dreams of the Absent, Oblician, Cut Me, Heavenly Air, On the Open Sea</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="1995-10-28">October 28, 1995</time></th>
  <td>Troy, NY</td>
  <td>Mother's Wine Emporium, RPI</td>
  <td>&nbsp;</td>
  <td>Lost In Side, Seraph, Cut Me, The Sleep of Angels, Cold</td>
  <td>acoustic set</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="1995-07-02">July 2, 1995</time></th>
  <td>Albany, NY</td>
  <td>QE2</td>
  <td>You Shriek, Spindle Shanks</td>
  <td>Awake at the Wall, A Touch of Heaven, Existential Sonnet, .....</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="1995-06-23">June 23, 1995</time></th>
  <td>Chicago, IL</td>
  <td>Convergence 1</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="1994-09-08">September 8, 1994</time></th>
  <td>Albany, NY</td>
  <td>QE2</td>
  <td>Clay People, Virus 23, Psycho Babes</td>
  <td>Awake at the Wall, CryGods, A Touch of Heaven, The Sleep of Angels, On the Open Sea, Oblician, The Death of an Angel, Pain, Dark Splintered Heart</td>
  <td>Dan Neet (of The Clay People) sang Pain and Dark Splintered Heart</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="1994-08-30">August 30, 1994</time></th>
  <td>Albany, NY</td>
  <td>QE2</td>
  <td>Course of Empire, Sister Machine Gun, Engines of Aggression</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="1994-08-09">August 9, 1994</time></th>
  <td>Louisville, KY</td>
  <td>Louisville Gardens</td>
  <td>Liers in Wait, Electric Hellfire Club, Christian Death</td>
  <td>Perception, CryGods, Oblician, The Sleep of Angels, Walls, A Touch of Heaven, Cold, Conception, Lullaby</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="1994-02-25">February 25, 1994</time></th>
  <td>Troy, NY</td>
  <td>RPI</td>
  <td>&nbsp;</td>
  <td>Awake at the Wall, Oblician, Perception, CryGods, Lifeless, Conception II, A Touch of Heaven, Pain, Midnight</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th scope="row"><time datetime="1993-10-30">October 30, 1993</time></th>
  <td>Bennington, VT</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>Dark Splintered Heart, CryGods, Lifeless, Conception II, A Touch of Heaven, Pain, Midnight</td>
  <td>First ever tMitG live show. Guitar performed by Ben Lavigne.</td>
 </tr>
</tbody>
</table>
</div> <!-- /tblwrap -->

</section>

</main> <!-- /mainbody -->

</body>
</html>
