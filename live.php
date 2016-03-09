<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<? require_once("functions.php"); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="no-js ie6 ie678" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7 ie678" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8 ie678" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - live performances</title>
	<meta name="keywords" content="machine in the garden, tmitg, music, CDs, roger frace, summer bowman, performances, shows, live">
	<meta name="copyright" content="<?=date('Y',time());?>">
	<?php include_once("headers-additional.php"); ?>
	
	<script src="js/jquery.tools.min.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>

	<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAA1X0V6TOrwS2XcT9oTLdSyxTpVTUd74_NY-Jkhumb6CF42d9gpBT6YuUiVE3t2jtcZZ7oOAuXeYGDZg" type="text/javascript"></script>
	<script type="text/javascript">
		function initialize() {
			if (GBrowserIsCompatible()) {
				// this variable will collect the html which will eventualkly be placed in the side_bar
				var side_bar_html = "";
				
				// arrays to hold copies of the markers used by the side_bar
				// because the function closure trick doesnt work there
				var gmarkers = [];
				
				// A function to create the marker and set up the event window
				function createMarker(point,name,html) {
					var marker = new GMarker(point);
					GEvent.addListener(marker, "click", function() {
					marker.openInfoWindowHtml(html);
				});
				// save the info we need to use later for the side_bar
				gmarkers.push(marker);
				// add a line to the side_bar html
				side_bar_html += '<a href="javascript:myclick(' + (gmarkers.length-1) + ')">' + name + '<\/a><br>';
				return marker;
				}
				
				
				// This function picks up the click and opens the corresponding info window
				function myclick(i) {
				GEvent.trigger(gmarkers[i], "click");
				}
	
				var map = new GMap2(document.getElementById("map_canvas"));
				map.setCenter(new GLatLng(37.464165, -97.685381), 4);
				map.setUIToDefault();
				
				// Read the data from example.xml
				GDownloadUrl("livegmap.xml", function(doc) {
				var xmlDoc = GXml.parse(doc);
				var markers = xmlDoc.documentElement.getElementsByTagName("marker");
				
				for (var i = 0; i < markers.length; i++) {
					// obtain the attribues of each marker
					var lat = parseFloat(markers[i].getAttribute("lat"));
					var lng = parseFloat(markers[i].getAttribute("lng"));
					var point = new GLatLng(lat,lng);
					var html = markers[i].getAttribute("html");
					var label = markers[i].getAttribute("label");
					// create the marker
					var marker = createMarker(point,label,html);
					map.addOverlay(marker);
				}
				// put the assembled side_bar_html contents into the side_bar div
				document.getElementById("side_bar").innerHTML = side_bar_html;
				});
			}
		}
		</script>

	<link rel="stylesheet" type="text/css" href="/css/tablesorter/style.css">
	<link rel="stylesheet" type="text/css" href="tmitg.css">
	<? include_once("googletracking.html"); ?>
</head>

<body onload="initialize()" onunload="GUnload()">

<? get_header(); ?>

<div class="mainbody" role="main">

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
<div id="map_canvas" style="width: 100%; height: 300px"></div>
<!-- end google map -->

<!-- paste below here -->
<table id="liveTable" class="tablesorter" role="grid">
  <col class="col1">
  <col class="col2">
  <col class="col3">
  <col class="col4">
  <col class="col5">
  <col class="col6">
<thead role="rowgroup">
 <tr role="row">
  <th class="header" scope="col" role="columnheader">date</th>
  <th class="header" scope="col" role="columnheader">city</th>
  <th class="header" scope="col" role="columnheader">venue</th>
  <th class="header" scope="col" role="columnheader">other bands</th>
  <th class="header" scope="col" role="columnheader">songs played</th>
  <th class="header" scope="col" role="columnheader">notes</th>
 </tr>
</thead>

<tbody role="rowgroup">
  <tr role="row">
  <td>November 30, 2013</td>
  <td>Austin, TX</td>
  <td>Elysium</td>
  <td>Ego Likeness, Servitor, XBRMNT</td>
  <td>Cimmerian, The Inside World, Scathefire, Masks, Mental Wasteland, In the Vanir, Spider's Bride, Final Form</td>
  <td>&nbsp;</td>
 </tr>

  <tr role="row">
  <td>March 1, 2008</td>
  <td>Austin, TX</td>
  <td>Secret Oktober</td>
  <td>Mirabilis</td>
  <td>Every Thing She Is, One, A Touch of Heaven, The Sleep of Angels, Walls, Valentine, Nowhere, Otherworld</td>
  <td>semi-acoustic guitar/vox only; release party for <em>XV</em> and <em>Sub Rosa</em>; first ever Mirabilis show</td>
 </tr>

  <tr role="row">
  <td>August 19, 2007</td>
  <td>Austin, TX</td>
  <td>Red Eyed Fly</td>
  <td>Sunshine Helicopters, Esther LaVonne Band, Gobi</td>
  <td>The Inside World, This Silence, Wonderland, Spider's Bride, Control, Open, Icarus, Mental Wasteland, Suspend</td>
  <td>&nbsp;</td>
 </tr>
 
  <tr role="row">
  <td>February 9, 2007</td>
  <td>Austin, TX</td>
  <td>Elysium</td>
  <td>&nbsp;</td>
  <td>The Inside World, Masks, This Silence, Wonderland, Spider's Bride, Seek, Control, Final Form, On the Wire, A Touch of Heaven</td>
  <td>&nbsp;</td>
 </tr>
 
 <tr role="row">
  <td>November 24, 2006</td>
  <td>Austin, TX</td>
  <td>Elysium</td>
  <td>Attrition, High Blue Star, subNatural</td>
  <td>The Inside World, Control, Echo, Spider's Bride, This Silence, Final Form, Need-Fire, Suspend</td>
  <td>&nbsp;</td>
 </tr>

 <tr role="row">
  <td>June 30, 2006</td>
  <td>Austin, TX</td>
  <td>Elysium</td>
  <td>Voltaire, The Brobdingnagian Bards</td>
  <td>Winter Fell, This Silence, Wonderland, Hide Away, The Inside World, Valentine, Final Form, Far From Home, Scarborough Fair</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>March 18, 2006</td>
  <td>Houston, TX</td>
  <td>HaVoK @ Club Middle Earth</td>
  <td>The Birthday Massacre, Since the Ashes</td>
  <td>The Inside World, A Touch of Heaven, Control, Wonderland, This Silence, Spider's Bride, Final Form, Seek</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>September 17, 2005</td>
  <td>Charlottesville, VA</td>
  <td>The Dawning @ The Outback Lodge</td>
  <td>Heaven Falls Hard</td>
  <td>The Inside World, Control, Final Form, Winter Fell,
  Clarity The Sleep of Angels, Masks, This Silence, Words in Heaven Lost,
  Suspend, Photographic (encore)</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>September 16, 2005</td>
  <td>Louisville, KY</td>
  <td>Main Street Lounge</td>
  <td>&nbsp;</td>
  <td>The Inside World, Open, Winter Fell, This Silence, A
  Touch of Heaven, Outside, Control, Masks, Seek, Final Form, Suspend</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>September 15, 2005</td>
  <td>Nashville, TN</td>
  <td>Hair of the Dog</td>
  <td>The Last Dance, Simple Shelter</td>
  <td>The Inside World, Control, This Silence, A Touch of
  Heaven, Winter Fell, Final Form, Suspend</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>September 13, 2005</td>
  <td>Champaign, IL</td>
  <td>Subversion @ The Highdive</td>
  <td>&nbsp;</td>
  <td>The Inside World, Open, Winter Fell, This Silence,
  Outside, Control, Masks, Seek, Final Form, Suspend</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>August 20, 2005</td>
  <td>Austin, TX</td>
  <td>End of an Ear</td>
  <td>&nbsp;</td>
  <td>This Silence, Valentine, Cold, Illusions in Rain,
  Seraph, The Sleep of Angels, Falling into the Sea, Far From Home, Oh Dear,
  Every Thing She Is, Dreams of the Absent, Hide Away, Photographic</td>
  <td>a semi-acoustic in-store performance</td>
 </tr>
 <tr role="row">
  <td>June 12, 2005</td>
  <td>Houston, TX</td>
  <td>HaVoK</td>
  <td>Asmodeus X</td>
  <td>The Inside World, Masks, Control, This Silence,
  Outside, A Touch of Heaven, Winter Fell, Final Form, Suspend</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>May 20, 2005</td>
  <td>Dallas, TX</td>
  <td>The Cavern</td>
  <td>Bloodwire, Hungry Lucy</td>
  <td>The Inside World, Open, Control, Winter Fell,
  Outside, This Silence, Words in Heaven Lost, Final Form, Suspend</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>May 6, 2005</td>
  <td>Austin, TX</td>
  <td>Elysium</td>
  <td>Hollow, Jasmine Reign</td>
  <td>The Inside World, Open, Control, Winter Fell,
  Outside, This Silence, Words in Heaven Lost, FInal Form, Suspend, The Sleep
  of Angels (encore, no backing track)</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>April 23, 2005</td>
  <td>San Diego, CA</td>
  <td>Convergence 11 @ 4th &amp; B</td>
  <td>&nbsp;</td>
  <td>The Inside World, Masks, Control, Open, This
  Silence, Winter Fell, Radiant, Final Form</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>August 30, 2004</td>
  <td>Austin, TX</td>
  <td>Elysium</td>
  <td>Faith and the Muse, Hollow</td>
  <td>Open, Masks, The Sleep of Angels, Outside, Every
  Thing She Is, CryGods, Icarus, Final Form, Radiant, Suspend</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>May 6, 2004</td>
  <td>Austin, TX</td>
  <td>Elysium</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>October 25, 2002</td>
  <td>Austin, TX</td>
  <td>Elysium</td>
  <td>Lucid Dementia, CTRL</td>
  <td>Masks, Control, Outside, Open, Lost In Side,
  Clarity, Intrigue, Time, Final Form, Seek, Photographic</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>March 29, 2002</td>
  <td>New Orleans, LA</td>
  <td>GothCon</td>
  <td>&nbsp;</td>
  <td>Masks, Control, Outside, Radiant, The Sleep of
  Angels, Open, Valentine, Clarity, Final Form, Seek, Photographic</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>November 10, 2001</td>
  <td>Los Angeles, CA</td>
  <td>Bar Sinister</td>
  <td>&nbsp;</td>
  <td>Her Face, Control, Final Form, CryGods, Tears, The Sleep of
  Angels, Cold, Masks, Radiant, Photographic</td>
  <td>Dru (Mirabilis, This Ascension, Falling You) performed the Mirabilis song "Tears" and sang back-up on "The Sleep of Angels."</td>
 </tr>
 <tr role="row">
  <td>October 13, 2001</td>
  <td>New York, NY</td>
  <td>CMJ @ Downtime</td>
  <td>&nbsp;</td>
  <td>Her Face, Control, Final Form, CryGods, Far From
  Home, Valentine, Cold, Ex Oblivione, Radiant, Masks, Photographic</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>April 14, 2001</td>
  <td>San Francisco, CA</td>
  <td>Shrine of Lillith</td>
  <td>&nbsp;</td>
  <td>Intrigue, Rusty Haloes, Control, The Unaware, Words
  in Heaven Lost, Cut Me, Failure, The Sleep of Angels, Her Face, CryGods,
  Photographic</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>April 13, 2001</td>
  <td>Los Angeles, CA</td>
  <td>Antiquity@ The Gig</td>
  <td>&nbsp;</td>
  <td>Intrigue, Rusty Haloes, Lost In Side, The Unaware,
  Her Face, Failure, Control, Radiant, Photographic</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>December 2, 2000</td>
  <td>New York, NY</td>
  <td>Batcave @ Downtime</td>
  <td>&nbsp;</td>
  <td>Intrigue, The Unaware, Control, Valentine, Her Face,
  Words in Heaven Lost, Rusty Haloes, Every Thing She Is, Oh Dear, Failure, The
  Sleep of Angels, Radiant, Final Form</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>July 29, 2000</td>
  <td>Denton, TX</td>
  <td>Rick's Place</td>
  <td>Faith and the Muse, Hollow Girl</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>July 18, 1999</td>
  <td>New York, NY</td>
  <td>Mother</td>
  <td>Mors Syphilitica</td>
  <td>Words in Heaven Lost, Falling Too, Her Face,
  Valentine, Final Form, A Touch of Heaven, Midnight, Control, Radiant</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>July 17, 1999</td>
  <td>Newark, NJ</td>
  <td>QXT</td>
  <td>&nbsp;</td>
  <td>Control, A Touch of Heaven, Falling Too, Final Form,
  Lost In Side, Cut Me, Spider's Bride, Primevil</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>July 3, 1999</td>
  <td>San Antonio, TX</td>
  <td>The Wild Club</td>
  <td>Nocturne, Paris By Night, Margot Day</td>
  <td>&nbsp;</td>
  <td>Midsummer Nyte Scream Tour</td>
 </tr>
 <tr role="row">
  <td>July 2, 1999</td>
  <td>Austin, TX</td>
  <td>Atomic Caf&eacute;</td>
  <td>Nocturne, Paris By Night, Margot Day</td>
  <td>&nbsp;</td>
  <td>Midsummer Nyte Scream Tour</td>
 </tr>
 <tr role="row">
  <td>June 30, 1999</td>
  <td>Dallas, TX</td>
  <td>Curtain Club</td>
  <td>Nocturne, Paris By Night, Margot Day</td>
  <td>&nbsp;</td>
  <td>Midsummer Nyte Scream Tour</td>
 </tr>
 <tr role="row">
  <td>June 27, 1999</td>
  <td>Boulder, CO</td>
  <td>Millenium</td>
  <td>Nocturne, Paris By Night, Margot Day</td>
  <td>&nbsp;</td>
  <td>Midsummer Nyte Scream Tour</td>
 </tr>
 <tr role="row">
  <td>November 6, 1998</td>
  <td>San Antonio, TX</td>
  <td>The Wild Club</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>May 12, 1998</td>
  <td>Denver, CO</td>
  <td>7 South</td>
  <td>Babylonian Tiles</td>
  <td>Words in Heaven Lost, Control, A Touch of Heaven, The Sleep of Angels, Final Form, Dreams of the Absent, CryGods, Shadowy Depths, The Hanging Garden, Cold</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>April 25, 1998</td>
  <td>Denver, CO</td>
  <td>The Snakepit</td>
  <td>The Electric Hellfire Club</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>February 27, 1998</td>
  <td>Englewood, CO</td>
  <td>Borders Books and Music</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>a semi-acoustic in-store performance, we don't have
  the exact date</td>
 </tr>
 <tr role="row">
  <td>August 21, 1997</td>
  <td>Boulder, CO</td>
  <td>Millenium</td>
  <td>Filmstrip, Generation Excuse, Skull Flux</td>
  <td>Primevil, A Touch of Heaven, Oblician, Conception, Bloody Murder, Dark Splintered Heart, Spider's Bride, Cut Me, Final Form</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>August 15, 1997</td>
  <td>Denver, CO</td>
  <td>7 South</td>
  <td>Autumn, Filmstrip</td>
  <td>Final Form, Lost In Side, A Touch of Heaven, The
  Sleep of Angels, CryGods, Corpus Christi, Dreams of the Absent, Cut Me,
  Heavenly Air</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>March 29, 1997</td>
  <td>San Francisco, CA</td>
  <td>Sanctuary</td>
  <td>Healthy Morbidity</td>
  <td>Fates and Furies, A Touch of Heaven, The Sleep of Angels, CryGods, Seraph, Lost In Side, Cut Me, Spider's Bride, Corpus Christi, Final Form, Io's Departure</td>
  <td>Summer's first show with tMitG</td>
 </tr>
 <tr role="row">
  <td>June 2, 1996</td>
  <td>Toronto, ON</td>
  <td>Savage Garden</td>
  <td>State of Grace</td>
  <td>Spiritus ex Obitus Sanctus (intro), A Touch of Heaven, The Sleep of Angels, Lost in Side, CryGods, Seraph, Dreams of the Absent, Oblician, Cut Me, Spider's Bride, Primevil, Heavenly Air (crunchmix), A Stagnant Pale Reflection, Corpus Christi, Walls, Io's Departure</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>March 31, 1996</td>
  <td>Albany, NY</td>
  <td>QE2</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>post-thesis performance</td>
 </tr>
 <tr role="row">
  <td>November 19, 1995</td>
  <td>Pittsburgh, PA</td>
  <td>WRCT Radio</td>
  <td>&nbsp;</td>
  <td>A Touch of Heaven, Cut Me, CryGods, Seraph,
  Oblician, The Sleep of Angels, Heavenly Air</td>
  <td>Live-in-Studio recording for a radio show</td>
 </tr>
 <tr role="row">
  <td>November 18, 1995</td>
  <td>Pittsburgh, PA</td>
  <td>Bloomfield Bridge Tavern</td>
  <td>Apocalypse Theatre, Vampire Nation</td>
  <td>Spiritus ex Obitus Sanctus, The Sleep of Angels, A
  Touch of Heaven, CryGods, Existential Sonnet, Lost In Side, Dreams of the
  Absent, Oblician, Cut Me, Heavenly Air, On the Open Sea</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>October 28, 1995</td>
  <td>Troy, NY</td>
  <td>Mother's Wine Emporium, RPI</td>
  <td>&nbsp;</td>
  <td>Lost In Side, Seraph, Cut Me, The Sleep of Angels, Cold</td>
  <td>acoustic set</td>
 </tr>
 <tr role="row">
  <td>July 2, 1995</td>
  <td>Albany, NY</td>
  <td>QE2</td>
  <td>Spindle Shanks</td>
  <td>Awake at the Wall, A Touch of Heaven, Existential Sonnet, .....</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>June 23, 1995</td>
  <td>Chicago, IL</td>
  <td>Convergence 1</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>September 8, 1994</td>
  <td>Albany, NY</td>
  <td>QE2</td>
  <td>Clay People, Virus 23, Psycho Babes</td>
  <td>Awake at the Wall, CryGods, A Touch of Heaven, The Sleep of Angels, On the Open Sea, Oblician, The Death of an Angel, Pain, Dark Splintered Heart</td>
  <td>Dan Neet (of The Clay People) sang Pain and Dark
  Splintered Heart</td>
 </tr>
 <tr role="row">
  <td>August 9, 1994</td>
  <td>Louisville, KY</td>
  <td>Louisville Gardens</td>
  <td>Liers in Wait, Electric Hellfire Club, Christian Death</td>
  <td>Perception, CryGods, Oblician, The Sleep of Angels, Walls, A Touch of Heaven, Cold, Conception, Lullaby</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>February 25, 1994</td>
  <td>Troy, NY</td>
  <td>RPI</td>
  <td>&nbsp;</td>
  <td>Awake at the Wall, Oblician, Perception, CryGods,
  Lifeless, Conception II, A Touch of Heaven, Pain, Midnight</td>
  <td>&nbsp;</td>
 </tr>
 <tr role="row">
  <td>October 30, 1993</td>
  <td>Bennington, VT</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>Dark Splintered Heart, CryGods, Lifeless, Conception
  II, A Touch of Heaven, Pain, Midnight</td>
  <td>First ever tMitG live show. Guitar performed by Ben
  Lavigne.</td>
 </tr>
</tbody>
</table>
</section>

</div> <!-- /mainbody -->

<!-- tablesorter JS -->
<script type="text/javascript">
// from http://www.mail-archive.com/jquery-en@googlegroups.com/msg27131.html
// add parser through the tablesorter addParser method
$.tablesorter.addParser({
	// set a unique id
	id: 'dates',
	is: function(s) {
		// return false so this parser is not auto detected
		return false;
	},
	format: function(s) {
		// split
		var a = s.split('-');
		// get month num
		a[1] = this.getMonth(a[1]);
		// glue and return a new date
		return new Date(a.reverse().join("/")).getTime();
	},
	getMonth: function(s) {
		var m = ['january','february','march','april','may','june','july','august','september','october','november','december'];
		var l = m.length;
		for(var i=0; i < l; i++) {
			if(m[i] == s.toLowerCase()) {
				return (i+1);
			}
		}
	},
	// set type, either numeric or text
	type: 'numeric'
});

// do the sorting
$(document).ready(function(){
	$("#liveTable").tablesorter();
});
</script>

</body>
</html>
