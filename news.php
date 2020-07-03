<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php
//need to send different headers if this is a single-item view
if (isset($_GET["item"])) {
	$titlenum = $_GET["item"];
	include("newsitems/".$titlenum.".php");
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
		print '<link rel="image_src" href="http://www.tmitg.com/photos/xv1.jpg" />
			   <meta property="og:image" content="http://www.tmitg.com/photos/xv1.jpg" />';
	} ?>
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@tmitg" />
	<meta name="twitter:creator" content="@tmitg" />
	<meta name="copyright" content="<?=date('Y',time());?>" />
	<?php include_once("headers-additional.php"); ?>
	<link rel="alternate" type="application/rss+xml" href="/news-rss.xml.php" title="the Machine in the Garden - news" />
	<link href="https://plus.google.com/111746563913739447111" rel="publisher" />
	<?php if (check_mobile()==false) { include_once("fblike.html"); } ?>
</head>

<body id="news">
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
					<a href=\"/news.php?item=".$newsnum."\" itemprop=\"url\" title=\"Permalink\" name=\"Permalink\"><img src=\"images/icon-link.png\" alt=\"Permalink\" /><span class=\"wai\">Permalink</span></a>
					</div>\n";
				// facebook
				echo "<div class=\"shareitem\"><iframe src=\"https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.tmitg.com%2Fnews.php%3Fitem%3D".$newsnum."&width=61&layout=button_count&action=like&size=small&show_faces=false&share=false&height=21&appId=121619441387\" width=\"61\" height=\"21\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\"></iframe></div>";
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
	$indexCount = (count($dirArray) < 20 ? count($dirArray) : 20);
	
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
		<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftmitg%2F&tabs=timeline&width=300&height=750&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=121619441387" width="300" height="750" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
	<?php endif; ?>
	</div>
	
	<div class="twitterblock">
	<?php if (check_mobile()==false): ?>
		<a class="twitter-timeline" data-width="300" data-height="750" href="https://twitter.com/tmitg">Tweets by tmitg</a>
		<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
	<?php endif; ?>
	</div>
	
</aside> <!-- /rightcolumn -->

<br style="clear:both;" />

</main> <!-- /mainbody -->

</body>
</html>
