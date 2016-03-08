<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php
//need to send different headers if this is a single-item view
if ($_GET["item"]) {
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
<? require_once("functions.php"); ?>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>the Machine in the Garden - news - <?=$mtitle;?></title>
	<meta name="title" content="<?=$mtitle;?>" />
	<meta name="description" content="<?=$mdescription;?>" />
	<meta name="medium" content="news" />
	<?php if ($titlenum): ?>
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
		if (($_GET["item"]) && (!stristr($description,"<img "))) {
		print '<link rel="image_src" href="http://www.tmitg.com/photos/xv1.jpg" />
			   <meta property="og:image" content="http://www.tmitg.com/photos/xv1.jpg" />';
	} ?>
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@tmitg" />
	<meta name="twitter:creator" content="@tmitg" />
	<meta name="copyright" content="<?=date('Y',time());?>" />
	<?php include_once("headers-additional.php"); ?>
	<link rel="stylesheet" type="text/css" href="tmitg.css" />
	<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
	<script src="tmitg.js" type="text/javascript"></script>
	<link rel="alternate" type="application/rss+xml" href="/news-rss.xml.php" title="the Machine in the Garden - news" />
	<link href="https://plus.google.com/111746563913739447111" rel="publisher" />
	<? include_once("googletracking.html"); ?>
	<? if (check_mobile()==false) { include_once("fblike.html"); } ?>
</head>

<body id="news">

<? get_header(); ?>

<div class="mainbody" role="main">

<section class="rssicons">

		<!-- generic XML image -->
		<a type="application/rss+xml" href="http://www.tmitg.com/news-rss.xml.php"><img src="images/xml_logo.gif" alt="XML Logo" width="36" height="14" /></a>

		<!-- LiveJournal link -->
		<a href="http://www.livejournal.com/friends/add.bml?user=tmitgnews"><img src="http://www.tmitg.com/images/LJrss.gif" alt="LiveJournal RSS" width="74" height="18" style="vertical-align:-2px;" /></a>

		<!-- my google link -->
		<a href="http://fusion.google.com/add?feedurl=http://www.tmitg.com/news-rss.xml.php"><img src="http://buttons.googlesyndication.com/fusion/add.gif" alt="Add to Google" width="104" height="17" /></a>

		<!-- my Yahoo link -->
		<a href="http://us.rd.yahoo.com/my/atm/the%20Machine%20in%20the%20Garden/the%20Machine%20in%20the%20Garden%20-%20news/*http://add.my.yahoo.com/rss?url=http%3A//www.tmitg.com/news-rss.xml.php"><img src="http://us.i1.yimg.com/us.yimg.com/i/us/my/addtomyyahoo4.gif" width="91" height="17" alt="Add to My Yahoo!" /></a>

</section>

<br style="clear:both;" />

<section class="newscolumn">
<?
function display_news($newsnum,$pubdate,$title,$description) {
	echo "<article>
		<fieldset style=\"margin-bottom:14px;\" itemprop=\"NewsArticle\" itemscope itemtype=\"http://schema.org/NewsArticle\">
		<legend><span itemprop=\"datePublished\" content=\"".date("Ymd",strtotime($pubdate))."\" style=\"font-family:arial,sans-serif; font-size:1.25em;\">".date("F jS, Y",strtotime($pubdate))."</span></legend>
        <strong itemprop=\"headline\">".$title."</strong>
		<br /><span itemprop=\"articleBody\">".$description."</span>";
		if (check_mobile()==false) {
			echo "<div class=\"sharelinks\">";
				//permalink
				echo "<div class=\"shareitem\">
					<a href=\"/news.php?item=".$newsnum."\" itemprop=\"url\" title=\"Permalink\" name=\"Permalink\"><img src=\"images/icon-link.png\" alt=\"Permalink\" /></a>
					</div>\n";
				// facebook
				echo "<div class=\"shareitem\"><fb:like href=\"http://www.tmitg.com/news.php?item=".$newsnum."\" send=\"false\" layout=\"button_count\" show_faces=\"false\" font=\"arial\"></fb:like></div>\n";
				//twitter
				echo "<a href=\"http://www.tmitg.com/news.php?item=".$newsnum."\" class=\"twitter-share-button\" data-lang=\"en\">Tweet</a>";
				//google+1
				echo "<div class=\"shareitem\"><g:plusone size=\"medium\" href=\"http://www.tmitg.com/".$newsnum."\"></g:plusone></div>";
			echo "</div> <!--/sharelinks-->";
		}
	echo "</fieldset>
	</article>";
}

$newsnum = $_GET["item"];

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

	<div class="twitterblock">
	<?php if (check_mobile()==false): ?>
		<a class="twitter-timeline" href="https://twitter.com/tmitg" data-widget-id="609180666110939137">Tweets by @tmitg</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	<?php endif; ?>
	</div>

	<div class="fbblock">
	<?php if (check_mobile()==false): ?>
		<iframe src="http://www.facebook.com/plugins/likebox.php?id=8325398748&amp;width=300&amp;connections=0&amp;stream=true&amp;header=true&amp;height=427" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:427px;" allowTransparency="true"></iframe>
	<?php endif; ?>
	</div>
	
	<div class="gplusblock">
	<?php if (check_mobile()==false): ?>
		<g:plus href="https://plus.google.com/111746563913739447111" size="badge"></g:plus>
	<?php endif; ?>
	</div>
	
</aside> <!-- /rightcolumn -->

<br style="clear:both;" />

</div> <!-- /mainbody -->

</body>
</html>
