<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
$top = !empty($_POST['top']) ? $_POST['top'] : '';
if ($top=="merch.html") { header("Location:merch.php"); }
require_once("functions.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="no-js ie6 ie678" lang="en" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7 ie678" lang="en" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8 ie678" lang="en" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#"> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9" lang="en" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#"> <!--<![endif]-->
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="the Machine in the Garden is one of the premiere ethereal-electronic-darkwave-neoclassical-goth band in the American music industry. With 8 official releases and numerous other appearances since their founding in 1992, tMitG is one of the most lasting and prolific dark underground bands of the new era." />
	<meta name="keywords" content="machine in the garden, tmitg, ethereal, electronic, darkwave, goth, gothic, old school goth, neoclassical, band, music, CDs, roger frace, summer bowman" />
	<meta property="og:site_name" content="the Machine in the Garden" />
	<meta property="og:title" content="the Machine in the Garden" />
	<meta property="og:type" content="musician" />
	<meta property="og:url" content="http://www.tmitg.com/" />
	<meta property="og:description" content="the Machine in the Garden is one of the premiere ethereal-electronic-darkwave-neoclassical-goth band in the American music industry. With 8 official releases and numerous other appearances since their founding in 1992, tMitG is one of the most lasting and prolific dark underground bands of the new era." />
	<meta property="og:image" content="http://www.tmitg.com/photos/xv1.jpg" />
    <meta property="og:locale" content="en_US" />
    <meta property="fb:app_id" content="121619441387">
    <meta property="fb:admins" content="1120445561,713632115">
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@tmitg" />
	<meta name="twitter:creator" content="@tmitg" />
	<meta name="copyright" content="<?=date('Y',time());?>" />
	<meta content="minimum-scale=1.0, initial-scale=1" name="viewport" />

	<link rel="apple-touch-icon" href="touch-icon-precomposed.png">
	<link rel="apple-touch-icon" sizes="72x72" href="touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" sizes="114x114" href="touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" sizes="144x144" href="touch-icon-144x144-precomposed.png">
	<meta name="msapplication-TileColor" content="#bf1025"/>
	<meta name="msapplication-TileImage" content="touch-icon-144x144-precomposed.png">

	<title>the Machine in the Garden</title>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="tmitg.css" />
	<link rel="stylesheet" type="text/css" href="tmitg-home.css.php" media="all">
	<style type="text/css">
		body {background-image: url("headers/images/home/<?=$bgimg[$int];?>");}
	</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.6.4/jquery.colorbox-min.js"></script>
	<script src="tmitg.js" type="text/javascript"></script>
	<script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"MusicGroup","url":"http:\/\/www.tmitg.com\/","sameAs":["https:\/\/www.facebook.com\/tmitg","https:\/\/twitter.com\/tmitg","https:\/\/plus.google.com\/+Tmitg\/about","https:\/\/www.youtube.com\/tmitg"],"name":"the Machine in the Garden","foundingDate":"1992"}</script>
	<? include_once("googletracking.html"); ?>
</head>

<body id="front">
	<span id="skip-links">
		<a class="wai" href="#main">Skip to Main</a>
	</span>

<div id="bkgrnd"><img src="headers/images/home/<?=$bgimg[$int];?>" alt=""></div>

<?php if (stristr($_SERVER['HTTP_USER_AGENT'],"Windows NT 5.1")): ?>
<!--[if lt IE 8]> <div style=' clear: both; height: 59px; padding:0 0 0 15px; position: relative; left:200px;'> <a href="http://www.microsoft.com/en-us/download/details.aspx?id=43"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div> <![endif]-->
<?php else: ?>
<!--[if lt IE 8]> <div style=' clear: both; height: 59px; padding:0 0 0 15px; position: relative; left:200px;'> <a href="http://www.microsoft.com/en-us/download/details.aspx?id=22166"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div> <![endif]-->
<?php endif; ?>

<!-- title bar -->
<header id="titlebar">
	<h1><span class="title">the Machine in the Garden</span><span class="subtitle">the official website</span></h1>
</header>
<!--- end title bar -->

<nav class="desktop" aria-label="Primary">
	<ul>
		<li><a href="news.php">news</a></li>
		<li><a href="discog.php">discography</a></li>
		<li><a href="music.php">music</a></li>
		<li><a href="images.php">images</a></li>
		<li><a href="bio.php">bio</a></li>
		<li><a href="merch.php">merchandise</a></li>
		<li><a href="contact.php">contact</a></li>
		<li><a href="links.php">links</a></li>
		<li><a href="live.php">live shows</a></li>
	</ul>
</nav>
<nav class="mobile" aria-label="Primary">
  <button aria-expanded="false"><span class="wai">Toggle Navigation</span></button>
  <div>
		<a href="/index.php">home</a>
		<a href="/news.php">news</a>
		<a href="/discog.php">discography</a>
		<a href="/music.php">music</a>
		<a href="/images.php">images</a>
		<a href="/bio.php">bio</a>
		<a href="/merch.php">merchandise</a>
		<a href="/contact.php">contact</a>
		<a href="/links.php">links</a>
		<a href="/live.php">live shows</a>
  </div>
</nav>


<section id="main" role="main">
	<article>
		<h2>About</h2>
		<p class="notopmargin">The Machine in the Garden is a gothic/darkwave duo featuring Roger Frac&eacute; and Summer Bowman. Since their formation in the early 1990s, Roger and Summer have developed and advanced their unique style through years of collaborating and intertwining their musical tastes. The band has developed their own unique style and released seven full-length albums and one EP.</p>
	</article>

	<article>
		<!-- recent news section -->
		<h2>Recent News</h2>
		<p class="notopmargin"><a href="https://tmitg.bandcamp.com/track/image-acoustic"><img style="float:left; margin:2px 8px 8px 0; border:0;" src="http://www.tmitg.com/albums/imageacousticico.jpg" alt="Image (acoustic)" /></a> For the 20th anniversary of <em>Underworld</em> and as a thank you to our fans and friends, tMitG has released an acoustic version of one of their new songs, "Image." "Image" is available as a free download on our <a href="https://tmitg.bandcamp.com/track/image-acoustic">Bandcamp page</a>.</p>

		<div style="clear:both;"></div>
	</article>


	<article>
		<!-- live shows section -->
		<h2>Live Shows</h2>

		<!--<p class="notopmargin"><b>Saturday, November 30, 2013</b>
		<br /><b>Austin, TX</b>
		<br /><a href="http://www.elysumonline.net/" target="_parent">Elysium</a>
		<br />705 Red River, Austin, TX
		<br />with <a href="http://www.egolikeness.com/" target="_blank">Ego Likeness</a> (12am), <a href="https://www.facebook.com/pages/Servitor/344543773871" target="_blank">Servitor</a> (11pm) and <a href="https://www.facebook.com/XBRMNT" target="_blank">XBRMNT</a> (9pm)
		<br />Doors open at 8 PM &bull; Show Starts at 8 PM &bull; $9 in advance &bull; $14 at the door &bull; 18+
		<br /><a href="https://www.facebook.com/events/323911431084405/" target="_blank">View the Facebook Event</a>
		<br />tMitG is scheduled for 10pm.</p>-->

		<p class="notopmargin">No live shows are scheduled at this time.</p>

		<p>Interested in booking the Machine in the Garden? Please <a href="contact.php" target="_parent">contact us</a>.</p>
	</article>
</section>


</body>
</html>
