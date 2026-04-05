<?php
//need to send different headers if this is a single-item view
if (isset($_GET["item"])) {
	$titlenum = $_GET["item"];
	if( (!preg_match('/^[0-9]{3}$/', $titlenum)) || (!file_exists("newsitems/".$titlenum.".php")) ) {
		header('HTTP/1.0 404 not found');die('404 not found');
	}
	$pubdate = '';
	$title = '';
	$description = '';
	include_once("newsitems/".$titlenum.".php");
	$mtitle = htmlentities(trim(strip_tags($title)));
	$cleandesc = explode(".",strip_tags($description));
	$mdescription = htmlentities(trim($cleandesc[0]));
	$mtype = "article";
} else {
// display standard values
	$mtitle = "the Machine in the Garden - news";
	$mdescription = "Current and past news from the Machine in the Garden.";
	$mtype = "blog";
}
?>
<?php require_once "functions.php"; ?>
<!DOCTYPE html>
<html	lang="en" 
		prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>the Machine in the Garden - news - <?=$mtitle;?></title>
	<meta name="title" content="<?=$mtitle;?>" />
	<meta name="description" content="<?=$mdescription;?>" />
	<meta name="medium" content="news" />
	<?php if (isset($titlenum)): ?>
		<link rel="canonical" href="https://www.tmitg.com/news.php?item=<?=htmlspecialchars($titlenum, ENT_QUOTES, 'UTF-8');?>" />
		<meta property="og:url" content="https://www.tmitg.com/news.php?item=<?=htmlspecialchars($titlenum, ENT_QUOTES, 'UTF-8');?>" />
	<?php else: ?>
		<link rel="canonical" href="https://www.tmitg.com/news.php" />
		<meta property="og:url" content="https://www.tmitg.com/news.php" />
	<?php endif; ?>
	<meta property="og:type" content="<?=$mtype;?>" />
	<meta property="og:title" content="<?=$mtitle;?>" />
	<meta property="og:description" content="<?=$mdescription;?>" />
	<meta property="og:site_name" content="the Machine in the Garden" />
	<meta property="fb:app_id" content="145634995501895" />
	<meta property="fb:admins" content="1120445561,713632115" />
	<?php // happy image thumbnail for FB
		if ((isset($_GET["item"])) && (!stristr($description,"<img "))) {
		print '<link rel="image_src" href="https://tmitg.com/photos/PiB-IMG_3840.jpg" />
			   <meta property="og:image" content="https://tmitg.com/photos/PiB-IMG_3840.jpg" />';
	} ?>
	<meta name="copyright" content="<?=date('Y',time());?>" />
	<?php include_once "headers-additional.php"; ?>
	<link rel="alternate" type="application/rss+xml" href="/news-rss.xml.php" title="the Machine in the Garden - news" />
	<style>
		article {
			content-visibility: auto;
			contain-intrinsic-size: 600px;
		}
	</style>
	<?php if (check_mobile()==false) { include_once("fblike.html"); } ?>
</head>

<body id="news">
<?php if (check_mobile()==false): ?>
	<!-- fb share button -->
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0&appId=207159742735690&autoLogAppEvents=1" nonce="YigLuG1p"></script>
	<!-- /fb share button -->
<?php endif; ?>

	<span id="skip-links">
		<a class="wai" href="#main">Skip to Main</a>
	</span>

<?php get_header(); ?>

<main id="main" class="mainbody">

<section class="rssicons">
	<!-- generic XML image -->
	<a aria-label="XML format for RSS feed" type="application/rss+xml" href="https://www.tmitg.com/news-rss.xml.php"><img src="images/xml_logo.gif" alt="XML Logo" width="36" height="14" /></a>
</section>

<br style="clear:both;" />

<div class="flexwrapper">

	<section aria-label="news column" class="newscolumn">
	<div style="display:none;">
		<span id="permalabel">permalink for </span>
	</div>
	<?php
	$newsnum = !empty($_GET['item']) ? $_GET['item'] : '';

	if ($newsnum != "") {
	// single display
		include_once("newsitems/".$newsnum.".php");
		display_news($newsnum,$pubdate,$title,$description);
		echo "<a href=\"/news.php\">Show all news</a>";
	} else {
	// multi-display
		$newsdir = "newsitems";
		$dirArray = [];
		$myDirectory = opendir($newsdir);
		while($entryName = readdir($myDirectory)) {
			$dirArray[] = $entryName;
		}
		closedir($myDirectory);
		//I think this means I'm displaying the 15 most recent items
		$indexCount = (count($dirArray) < 15 ? count($dirArray) : 15);
  
		rsort($dirArray);
		for($index=0; $index < $indexCount; $index++) {
			if (substr("$dirArray[$index]", 0, 1) != ".") { // don't list hidden files
				unset($pubdate);
				unset($title);
				unset($description);
				include($newsdir.'/'.$dirArray[$index]);
				$newsnum = str_replace(".php","",$dirArray[$index]);
				display_news($newsnum,$pubdate,$title,$description);
			}
		}
	}
	?>
	</section>

	<aside class="rightcolumn">

		<section class="fbblock" aria-label="tMitG Facebook feed">
		<?php if (check_mobile()==false): ?>
			<iframe loading="lazy" title="tMitG Facebook feed" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftmitg%2F&tabs=timeline&width=300&height=750&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=121619441387" width="300" height="750" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
		<hr>
		<?php endif; ?>
		</section>
  
		<section class="blueskyblock" aria-label="tMitG Bluesky feed">
		<?php if (check_mobile()==false): ?>
			<!-- from https://github.com/Vincenius/bsky-embed -->
			<script src="https://cdn.jsdelivr.net/npm/bsky-embed/dist/bsky-embed.es.js" async></script>
			<bsky-embed
				username="tmitg.bsky.social"
				mode="light"
				limit="5"
				link-target="_blank"
				link-image="true"
				custom-styles=".flex { display: block; } .whitespace-nowrap { white-space: normal; }"
				>
			</bsky-embed>
  		<?php endif; ?>
		</section>
  
	</aside> <!-- /rightcolumn -->

</div> <!-- /flexwrapper -->

<br style="clear:both;" />

</main>

</body>
</html>
