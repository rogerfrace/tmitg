<?php
//need to send different headers if this is a single-item view
if (isset($_GET["item"])) {
	$titlenum = $_GET["item"];
	if(strlen($titlenum)!=3) {header('HTTP/1.0 404 not found');die();}
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
<!DOCTYPE html>
<html	lang="en" 
		prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<?php require_once("functions.php"); ?>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>the Machine in the Garden - news - <?=$mtitle;?></title>
	<meta name="title" content="<?=$mtitle;?>" />
	<meta name="description" content="<?=$mdescription;?>" />
	<meta name="medium" content="news" />
	<?php if (isset($titlenum)): ?>
		<link rel="canonical" href="http://www.tmitg.com/news.php?item=<?=$titlenum;?>" />
		<meta property="og:url" content="http://www.tmitg.com/news.php?item=<?=$titlenum;?>" />
	<?php endif; ?>
	<meta property="og:type" content="<?=$mtype;?>" />
	<meta property="og:title" content="<?=$mtitle;?>" />
	<meta property="og:description" content="<?=$mdescription;?>" />
	<meta property="og:site_name" content="the Machine in the Garden" />
	<meta property="fb:app_id" content="145634995501895" />
	<meta property="fb:admins" content="1120445561,713632115" />
	<?php // happy image thumbnail for FB
		if ((isset($_GET["item"])) && (!stristr($description,"<img "))) {
		print '<link rel="image_src" href="http://tmitg.com/photos/PiB-IMG_3840.jpg" />
			   <meta property="og:image" content="http://tmitg.com/photos/PiB-IMG_3840.jpg" />';
	} ?>
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@tmitg" />
	<meta name="twitter:creator" content="@tmitg" />
	<meta name="copyright" content="<?=date('Y',time());?>" />
	<?php include_once("headers-additional.php"); ?>
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
	<!-- twitter widget -->
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	<!-- /twitter widget -->
<?php endif; ?>

	<span id="skip-links">
		<a class="wai" href="#main">Skip to Main</a>
	</span>

<?php get_header(); ?>

<main id="main" class="mainbody">

<section class="rssicons">
	<!-- generic XML image -->
	<a type="application/rss+xml" href="http://www.tmitg.com/news-rss.xml.php"><img src="images/xml_logo.gif" alt="XML Logo" width="36" height="14" /></a>
</section>

<br style="clear:both;" />

<div class="flexwrapper">

	<section class="newscolumn">
	<?php
	function display_news($newsnum,$pubdate,$title,$description) {
		echo "<article>
			<fieldset style=\"margin-bottom:14px;\" itemprop=\"NewsArticle\" itemscope itemtype=\"http://schema.org/NewsArticle\">
			<legend><time itemprop=\"datePublished\" datetime=\"".date("Y-m-d",strtotime($pubdate))."\" content=\"".date("Ymd",strtotime($pubdate))."\" style=\"font-family:arial,sans-serif; font-size:1.25em;\">".date("F jS, Y",strtotime($pubdate))."</time></legend>
			<h1 itemprop=\"headline\">".$title."</h1>
			<p itemprop=\"articleBody\">".$description."</p>";
			if (check_mobile()==false) {
				echo "<div class=\"sharelinks\">";
					//permalink
					echo "<div class=\"shareitem\">
						<a href=\"/news.php?item=".$newsnum."\" itemprop=\"url\" title=\"Permalink\" name=\"Permalink\"><i class=\"fa fa-link\" aria-hidden=\"true\"></i></a>
						</div>\n";
					//facebook share
					echo "<div class=\"shareitem\"><div class=\"fb-share-button\" data-href=\"http://www.tmitg.com/news.php?item=".$newsnum."\" data-layout=\"button_count\" data-size=\"small\"><a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.tmitg.com%2Fnews.php%3Fitem%3D".$newsnum."&amp;src=sdkpreparse\" class=\"fb-xfbml-parse-ignore\" aria-label=\"Share on Facebook\">Share</a></div></div>";
					//twitter
					echo "<div class=\"shareitem\"><a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"http://www.tmitg.com/news.php?item=".$newsnum."\" data-via=\"tmitg\" data-show-count=\"false\">Tweet</a><script async src=\"//platform.twitter.com/widgets.js\" charset=\"utf-8\"></script></div>";
				echo "</div> <!--/sharelinks-->";
			}
		echo "</fieldset>
		</article>";
	}

	$newsnum = !empty($_GET['item']) ? $_GET['item'] : '';

	if ($newsnum != "") {
	// single display
		include_once("newsitems/".$newsnum.".php");
		display_news($newsnum,$pubdate,$title,$description);
		echo "<a href=\"/news.php\">Show all news</a>";
	} else {
	// multi-display
		$newsdir = "newsitems";
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

		<div class="fbblock">
		<?php if (check_mobile()==false): ?>
			<iframe loading="lazy" title="tMitG Facebook feed" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftmitg%2F&tabs=timeline&width=300&height=750&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=121619441387" width="300" height="750" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
		<hr>
		<?php endif; ?>
		</div>
  
		<div class="twitterblock">
		<?php if (check_mobile()==false): ?>
			<a class="twitter-timeline" data-width="300" data-height="750" href="https://twitter.com/tmitg?ref_src=twsrc%5Etfw">Tweets by tmitg</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		<?php endif; ?>
		</div>
  
	</aside> <!-- /rightcolumn -->

</div> <!-- /flexwrapper -->

<br style="clear:both;" />

</main>

</body>
</html>
