<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php require_once("functions.php"); ?>
<?php
if (!empty($_GET['yt'])){
	switch ($_GET['yt']) {
#vs
#underworld
		case "finalform":
			$stitle="&ldquo;Final Form&rdquo; (Live 1997)";
			$sdesc="Filmed at Sanctuary in San Francisco, CA on March 29, 1997. This was Summer's first show with tMitG and the first live performance of &quot;Final Form.&quot;";
			$siframe='<iframe width="480" height="360" src="https://www.youtube.com/embed/AOV5BxJdeRg?rel=0" frameborder="0" allowfullscreen></iframe>';
			break;
		case "finalform2":
			$stitle="&ldquo;Final Form&rdquo; (Live 2000)";
			$sdesc="Filmed at Downtime in New York City on December 2, 2000 by Chris Flam.";
			$siframe='<iframe width="480" height="360" src="https://www.youtube.com/embed/igRzCKHJfAc?rel=0" frameborder="0" allowfullscreen></iframe>';
			break;
		case "finalform-fan":
			$stitle="&ldquo;Final Form&rdquo; (Fan Video)";
			$sdesc="Fan-made video of the Machine in the Garden &quot;Final Form&quot; from the 1997 album &quot;Underworld&quot; and the compilation &quot;The Unquiet Grave Volume 1&quot;.";
			$siframe='<iframe width="480" height="360" src="https://www.youtube.com/embed/JVhdZ8rFUok?rel=0" frameborder="0" allowfullscreen></iframe>';
			break;
#winters
		case "control":
			$stitle="&ldquo;Control&rdquo; (Live 2002)";
			$sdesc="Filmed at Elysium in Austin, TX on October 25, 2002 by Chad R. Miller.";
			$siframe='<iframe width="480" height="360" src="https://www.youtube.com/embed/91w_v5eb3fc?rel=0" frameborder="0" allowfullscreen></iframe>';
			break;
		case "control-vid":
			$stitle="&ldquo;Control&rdquo;";
			$sdesc="Music by the Machine in the Garden, from their 1999 release One Winter&#039;s Night... Video set to Fritz Lang's &quot;Metropolis,&quot; originally created in 2001 as a backing video for live shows.";
			$siframe='<iframe width="480" height="360" src="https://www.youtube.com/embed/sXxTMshSwwk?rel=0" frameborder="0" allowfullscreen></iframe>';
			break;
		case "miserere-fan":
			$stitle="&ldquo;Miserere Mei&rdquo; (Fan Video)";
			$sdesc="The Machine in the Garden did a haunting arrangement of Antonio Lotti&#039;s &quot;Miserere Mei&quot; piece originally composed during the height of the Renaissance period. I decided to combine the emotional elements of the music with the already tragic anime, Elfen Lied. The song is from their album &quot;One Winter&#039;s Night&hellip;&quot; and also the &quot;Sex, Death, &amp; Eyeliner&quot; original soundtrack.";
			$siframe='<iframe width="480" height="360" src="https://www.youtube.com/embed/hYvs45o2Itw?rel=0" frameborder="0" allowfullscreen></iframe>';
			break;
		case "miserere-fan2":
			$stitle="&ldquo;Miserere Mei&rdquo; (Fan Video)";
			$sdesc="An alternate &quot;Miserere Mei&quot; from the tragic anime, Elfen Lied. The song is from their album &quot;One Winter&#039;s Night&hellip;&quot; and also the &quot;Sex, Death, &amp; Eyeliner&quot; original soundtrack.";
			$siframe='<iframe width="480" height="360" src="https://www.youtube.com/embed/ZPQx9-y0tsc?rel=0" frameborder="0" allowfullscreen></iframe>';
			break;
		case "sleepofangels":
			$stitle="&ldquo;The Sleep of Angels&rdquo; (Live 2004)";
			$sdesc="Filmed at Elysium in Austin, TX on August 30, 2004.";
			$siframe='<iframe width="480" height="360" src="https://www.youtube.com/embed/ftfBbIHDEEY?rel=0" frameborder="0" allowfullscreen></iframe>';
			break;
		case "sleepofangels-fan":
			$stitle="&ldquo;The Sleep of Angels&rdquo; (Fan Video)";
			$sdesc="Fan-made video of the Machine in the Garden&#039;s track from their album &quot;One Winter's Night&hellip;&quot;.";
			$siframe='<iframe width="480" height="360" src="https://www.youtube.com/embed/IPQU3lbIGXc?rel=0" frameborder="0" allowfullscreen></iframe>';
			break;
#mists
		case "unaware":
			$stitle="&ldquo;The Unaware&rdquo;";
			$sdesc="Also available on the full-length enhanced CD &quot;Out of the Mists.&quot The video was filmed and produced by spectrumDV in Austin, Texas July 2000.";
			$siframe='<iframe width="480" height="360" src="https://www.youtube.com/embed/2uxlUjEJ_AM?rel=0" frameborder="0" allowfullscreen></iframe>';
			break;
		case "failure":
			$stitle="&ldquo;Failure&rdquo; (Live 2000)";
			$sdesc="Filmed at Downtime in New York City on December 2, 2000 by Chris Flam.";
			$siframe='<iframe width="480" height="360" src="https://www.youtube.com/embed/Z32HiotiBs8?rel=0" frameborder="0" allowfullscreen></iframe>';
			break;
		case "everythingsheis":
			$stitle="&ldquo;Every Thing She Is&rdquo; (Live 2004)";
			$sdesc="Filmed at Elysium in Austin, TX on August 30, 2004.";
			$siframe='<iframe width="480" height="360" src="https://www.youtube.com/embed/OQsWbpz_DkM?rel=0" frameborder="0" allowfullscreen></iframe>';
			break;
#asphodel
		case "masks":
			$stitle="&ldquo;Masks&rdquo; (Live 2002)";
			$sdesc="Filmed at Elysium in Austin, TX on October 25, 2002 by Chad R. Miller.";
			$siframe='<iframe width="480" height="360" src="https://www.youtube.com/embed/pmMwjDolmZA?rel=0" frameborder="0" allowfullscreen></iframe>';
			break;
		case "outside":
			$stitle="&ldquo;Outside&rdquo; (Live 2004)";
			$sdesc="Filmed at Elysium in Austin, TX on August 30, 2004.";
			$siframe='<iframe width="480" height="360" src="https://www.youtube.com/embed/TyHD66Bbnmg?rel=0" frameborder="0" allowfullscreen></iframe>';
			break;
		case "outside-amv":
			$stitle="&ldquo;Outside&rdquo; (AMV)";
			$sdesc="Music by the Machine in the Garden, from their 2002 release Asphodel. Video is clips from the anime &quot;Boogie Pop Phantom.&quot; This video was originally created in 2001 as a backing projection for live shows.";
			$siframe='<iframe width="480" height="360" src="https://www.youtube.com/embed/OWzXeNEMINI?rel=0" frameborder="0" allowfullscreen></iframe>';
			break;
		case "time":
			$stitle="&ldquo;Time&rdquo; (Live 2002)";
			$sdesc="Filmed at Elysium in Austin, TX on October 25, 2002 by Chad R. Miller.";
			$siframe='<iframe width="480" height="360" src="https://www.youtube.com/embed/NZmKJ-DpNyc?rel=0" frameborder="0" allowfullscreen></iframe>';
			break;
		case "open2020":
			$stitle="&ldquo;Open (Reimagined)&rdquo;";
			$sdesc="Official music video for &quot;Open (Reimagined)&quot; by the Machine in the Garden.";
			$siframe='<iframe width="480" height="360" src="https://www.youtube.com/embed/HVBhITDwX0Y?rel=0" frameborder="0" allowfullscreen></iframe>';
			break;
#shadow puppets
		case "thissilence":
			$stitle="&ldquo;This Silence&rdquo; (Live 2005)";
			$sdesc="Filmed at Convergence 11 (4th and B) in San Diego, CA on April 23, 2005.";
			$siframe='<iframe width="480" height="360" src="https://www.youtube.com/embed/RuV0HXFG-iU?rel=0" frameborder="0" allowfullscreen></iframe>';
			break;
		case "theinsideworld":
			$stitle="&ldquo;The Inside World&rdquo; (Live 2005)";
			$sdesc="Filmed at Convergence 11 (4th and B) in San Diego, CA on April 23, 2005.";
			$siframe='<iframe width="480" height="360" src="https://www.youtube.com/embed/ICGQ3GID2ak?rel=0" frameborder="0" allowfullscreen></iframe>';
			break;
		case "suspend":
			$stitle="&ldquo;Suspend&rdquo; (Live 2004)";
			$sdesc="Filmed at Elysium in Austin, TX on August 30, 2004.";
			$siframe='<iframe width="480" height="360" src="https://www.youtube.com/embed/DzzpbLliBdI?rel=0" frameborder="0" allowfullscreen></iframe>';
			break;
#xv
#before and after the storm
		case "cimmerian":
			$stitle="&ldquo;Cimmerian&rdquo; Teaser";
			$sdesc="Teaser video for the album &quot;Before and After the Storm&quot; from the Machine in the Garden.";
			$siframe='<iframe width="480" height="360" src="https://www.youtube.com/embed/dRxiGUmvh3U?rel=0" frameborder="0" allowfullscreen></iframe>';
			break;
		case "vanir":
			$stitle="&ldquo;In the Vanir&rdquo; (Live 2013)";
			$sdesc="Filmed at Elysium in Austin, TX on November 30, 2013.";
			$siframe='<iframe width="480" height="360" src="https://www.youtube.com/embed/lPiHYGcsz1A?rel=0" frameborder="0" allowfullscreen></iframe>';
			break;
#places in between
		case "teaser":
			$stitle="&ldquo;Places in Between&rdquo; Teaser";
			$sdesc="Teaser video for the album &quot;Places in Between&quot; from the Machine in the Garden.";
			$siframe='<iframe width="480" height="360" src="https://www.youtube.com/embed/o1ai_xl0Lcw" frameborder="0" allowfullscreen></iframe>';
			break;
		case "coldstorm":
			$stitle="&ldquo;Cold Storm&rdquo; Official Video";
			$sdesc="Official music video for &quot;Cold Storm&quot; by the Machine in the Garden.";
			$siframe='<iframe width="480" height="360" src="https://www.youtube.com/embed/V3_HSV_WwZE" frameborder="0" allowfullscreen></iframe>';
			break;
		case "athousandyears":
			$stitle="&ldquo;A Thousand Years of War&rdquo; Official Lyric Video";
			$sdesc="Official lyric video for &quot;A Thousand Years of War&quot; by the Machine in the Garden.";
			$siframe='<iframe width="480" height="360" src="https://www.youtube.com/embed/KsTb1hgZ0io" frameborder="0" allowfullscreen></iframe>';
			break;
		case "findaway":
			$stitle="&ldquo;Find a Way&rdquo; Official Lyric Video";
			$sdesc="Official lyric video for &quot;Find a Way&quot; by the Machine in the Garden.";
			$siframe='<iframe width="480" height="360" src="https://www.youtube.com/embed/lg2odj5wsbI" frameborder="0" allowfullscreen></iframe>';
			break;
	
	}
} else {
	die("no input");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$stitle;?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="description" content="<?=$sdesc;?>" />
	<meta content="minimum-scale=1.0, initial-scale=1" name="viewport" />
	<link rel="stylesheet" type="text/css" href="../tmitg.css" />
	<?php include_once("googletracking.html"); ?>
</head>

<body id="video">

<div class="movie" role="main">

<?=$siframe;?>

</div>

</body>
</html>
