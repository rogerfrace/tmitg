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
	<meta name="description" content="the Machine in the Garden is one of the premiere ethereal-electronic-darkwave-neoclassical-goth band in the American music industry. With 9 official releases and numerous other appearances since their founding in 1992, tMitG is one of the most lasting and prolific dark underground bands of the new era." />
	<meta name="keywords" content="machine in the garden, tmitg, ethereal, electronic, darkwave, goth, gothic, old school goth, neoclassical, band, music, CDs, roger frace, summer bowman" />
	<meta property="og:site_name" content="the Machine in the Garden" />
	<meta property="og:title" content="the Machine in the Garden" />
	<meta property="og:type" content="musician" />
	<meta property="og:url" content="http://www.tmitg.com/" />
	<meta property="og:description" content="the Machine in the Garden is one of the premiere ethereal-electronic-darkwave-neoclassical-goth band in the American music industry. With 9 official releases and numerous other appearances since their founding in 1992, tMitG is one of the most lasting and prolific dark underground bands of the new era." />
	<meta property="og:image" content="http://www.tmitg.com/photos/xv1.jpg" />
    <meta property="og:locale" content="en_US" />
    <meta property="fb:app_id" content="121619441387">
    <meta property="fb:admins" content="1120445561,713632115">
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@tmitg" />
	<meta name="twitter:creator" content="@tmitg" />
	<meta name="copyright" content="<?=date('Y',time());?>" />
	<meta content="minimum-scale=1.0, initial-scale=1" name="viewport" />

	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
	<meta name="msapplication-square70x70logo" content="/ms-smalltile.png" />
	<meta name="msapplication-square150x150logo" content="/ms-mediumtile.png" />
	<meta name="msapplication-square310x310logo" content="/ms-largetile.png" />

	<title>the Machine in the Garden</title>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<?php if (check_mobile()==false): ?>
	<link rel="preload" as="image" href="headers/images/home-portrait-643.jpg">
<?php else: ?>
	<link rel="preload" as="image" href="headers/images/home-portrait-379.jpg">
<?php endif; ?>
	<link rel="preload" as="style" href="tmitg-mobile.css">
	<link rel="stylesheet" type="text/css" href="tmitg.css" />
	<?php include_once("fontawesome.inc.php"); ?>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="tmitg.js" type="text/javascript"></script>
	<script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"MusicGroup","url":"http:\/\/www.tmitg.com\/","sameAs":["https:\/\/www.facebook.com\/tmitg","https:\/\/twitter.com\/tmitg","https:\/\/www.youtube.com\/tmitg"],"name":"the Machine in the Garden","foundingDate":"1992"}</script>
	<?php include_once("googletracking.html"); ?>
</head>

<body id="front">
	<span id="skip-links">
		<a class="wai" href="#main">Skip to Main</a>
	</span>

<?php if (stristr($_SERVER['HTTP_USER_AGENT'],"Windows NT 5.1")): ?>
<!--[if lt IE 8]> <div style=' clear: both; height: 59px; padding:0 0 0 15px; position: relative; left:200px;'> <a href="http://www.microsoft.com/en-us/download/details.aspx?id=43"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div> <![endif]-->
<?php else: ?>
<!--[if lt IE 8]> <div style=' clear: both; height: 59px; padding:0 0 0 15px; position: relative; left:200px;'> <a href="http://www.microsoft.com/en-us/download/details.aspx?id=22166"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div> <![endif]-->
<?php endif; ?>

<!-- title bar -->
<header id="titlebar">
	<h1>
		<img role="img" src="/headers/images/tMitG-PiB-logo.svg" alt="the Machine in the Garden">
		<span class="subtitle">the official website</span>
	</h1>

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
		<li><span class="iblock"><a href="https://www.facebook.com/tmitg" title="tMitG on Facebook"><i class="fab fa-facebook"></i></a>
			<a href="https://twitter.com/tmitg" title="tMitG on Twitter"><i class="fab fa-twitter"></i></a>
			<a href="https://tmitg.bandcamp.com" title="tMitG on Bandcamp"><i class="fab fa-bandcamp"></i></a></span></li>
	</ul>
</nav>
<nav class="mobile" aria-label="Primary">
  <button aria-expanded="false"><span class="wai">Toggle Navigation</span></button>
  <div>
		<a href="/index.php">Home</a>
		<a href="/news.php">News</a>
		<a href="/discog.php">Discography</a>
		<a href="/music.php">Music</a>
		<a href="/images.php">Images</a>
		<a href="/bio.php">Bio</a>
		<a href="/merch.php">Merchandise</a>
		<a href="/contact.php">Contact</a>
		<a href="/links.php">Links</a>
		<a href="/live.php">Live Shows</a>
		<a href="https://www.facebook.com/tmitg" title="tMitG on Facebook"><i class="fab fa-facebook"></i> Facebook</a>
		<a href="https://twitter.com/tmitg" title="tMitG on Twitter"><i class="fab fa-twitter"></i> Twitter</a>
		<a href="https://tmitg.bandcamp.com" title="tMitG on Bandcamp"><i class="fab fa-bandcamp"></i> Bandcamp</a>
  </div>
</nav>

<figure class="portrait">
	<figcaption class="wai">tMitG band members Roger and Summer pose seated in a Victorian-inspired decorated room</figcaption>
	<div class="portraitimg"></div>
	<div class="portraitgrad"><div>
</figure>

</header>
<!--- end title bar -->


<main id="main">
	<section aria-label="About tMitG">
		<h2>About</h2>
		<p class="notopmargin">The Machine in the Garden is an independent gothic/darkwave duo featuring Roger Frac&eacute; and Summer Bowman. Since their formation in the early 1990s, Roger and Summer have developed and advanced their unique style through years of collaborating and intertwining their musical tastes. The band has developed their own unique style and released eight full-length albums and one EP.</p>
	</section>

	<section id="recentnews" aria-label="tMitG Recent News">
		<!-- recent news section -->
		<h2>Recent News</h2>
		<?php
			$ndir = 'newsitems';
			$nfiles = scandir($ndir, 1);
			include_once($ndir."/".$nfiles[0]);
			//returns $pubdate $title $description
			$ndate = strtotime($pubdate);
		?>
		<div class="eyebrow"><time datetime="<?php echo date('Y-m-d',$ndate); ?>"><?php echo date("j F Y",$ndate); ?></time></div>
		<h3><?php echo $title; ?></h3>
		<div class="notopmargin">
			<?php echo $description; ?>
		</div>
		<div style="clear:both;"></div>
	</section>


	<section id="liveshows" aria-label="tMitG Live Shows">
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
	</section>
</main>

<footer>
	<small>View our <a href="policy.php">site policies, terms and conditions</a>.</small>
</footer>

</body>
</html>
