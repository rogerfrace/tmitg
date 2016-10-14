<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<? require_once("functions.php"); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="no-js ie6 ie678" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7 ie678" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8 ie678" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>the Machine in the Garden - images</title>
	<link rel="stylesheet" type="text/css" href="tmitg.css">
	<script src="/js/jquery-1.6.4.min.js" type="text/javascript"></script>
	<script src="/js/jail.0.9.5.min.js" type="text/javascript"></script>
	<?php include_once("headers-additional.php"); ?>
	<script src="tmitg.js" type="text/javascript"></script>
	<meta name="copyright" content="<?=date('Y',time());?>">
	<? include_once("googletracking.html"); ?>
</head>

<body id="images">

<? get_header(); ?>

<div class="mainbody" role="main">

<? 
// name of photos folder here
$phopath="photos"; 

// define image function here
function do_photo($imgname,$gallery=NULL,$alt=NULL) {
	if ($alt==NULL) { $alt=$imgname; }
	global $phopath;
	list($width, $height) = getimagesize($phopath.'/'.$imgname.'.jpg');
	$width=$width+20; $height=$height+24;
	list($tnwidth, $tnheight) = getimagesize($phopath.'/'.$imgname.'-ico.jpg');

	// combo shadowbox/php code
	if (check_mobile()==true) {
		echo "<li><a href=\"$phopath/$imgname.jpg\"><img src=\"$phopath/$imgname-ico.jpg\" alt=\"$alt\" border=\"0\" hspace=\"4\" vspace=\"4\"></a></li>\n";
	} else {
		echo "<li><a href=\"$phopath/$imgname.jpg\" class=\"imglink\" data-sb=\"shadowbox[".$gallery."]\" title=\"$gallery\" onclick=\"ga('send', 'event', 'Photo', 'View', '$imgname;');\"><img class=\"lazy\" src=\"/images/spacer.gif\" data-href=\"$phopath/$imgname-ico.jpg\" alt=\"$alt\" width=\"$tnwidth\" height=\"$tnheight\"></a>
		<noscript><a href=\"$phopath/$imgname.jpg\" title=\"$gallery\"><img src=\"$phopath/$imgname-ico.jpg\" alt=\"$alt\" width=\"$tnwidth\" height=\"$tnheight\"></a></noscript></li>\n";
	}
} // end function
	
?>


<!-- Build photo block -->

<section>
<h1>2015</h1>
<ul class="2015">
<?
do_photo('secretoktober','2015','Mirabilis live at Secret Oktober, Austin, TX 10-03-2015');
?>
</ul>
</section>

<section>
<h1>2013</h1>
<ul class="2013">
<?
do_photo('elysium2013b','2013','tMitG Live at Elysium Austin 11-30-2013 #1');
do_photo('elysium2013c','2013','tMitG Live at Elysium Austin 11-30-2013 #2');
do_photo('elysium2013d','2013','tMitG Live at Elysium Austin 11-30-2013 #3');
do_photo('elysium2013e','2013','tMitG Live at Elysium Austin 11-30-2013 #4');
?>
</ul>
</section>

<section>
<h1>2011</h1>
<ul class="2011">
<?
do_photo('baats-rs1','2011','tMitG Before and After the Storm photoshoot #1');
do_photo('baats-s1','2011','tMitG Before and After the Storm photoshoot #2');
do_photo('baats-r1','2011','tMitG Before and After the Storm photoshoot #3');
do_photo('baats-rs2','2011','tMitG Before and After the Storm photoshoot #4');
do_photo('baats-s2','2011','tMitG Before and After the Storm photoshoot #5');
do_photo('baats-r2','2011','tMitG Before and After the Storm photoshoot #6');
do_photo('baats-rs3','2011','tMitG Before and After the Storm photoshoot #7');
do_photo('baats-s3','2011','tMitG Before and After the Storm photoshoot #8');
do_photo('baats-r3','2011','tMitG Before and After the Storm photoshoot #9');
do_photo('baats-s4','2011','tMitG Before and After the Storm photoshoot #10');
do_photo('baats-r4','2011','tMitG Before and After the Storm photoshoot #11');
?>
</ul>
</section>

<section>
<h1>2007</h1>
<ul class="2007">
<?
do_photo('xv1','2007','tMitG XV photoshoot #1');
do_photo('xv3','2007','tMitG XV photoshoot #2');
do_photo('xv4','2007','tMitG XV photoshoot #3');
do_photo('xv2','2007','tMitG XV photoshoot #4');
do_photo('xv5','2007','tMitG XV photoshoot #5');
do_photo('xv6','2007','tMitG XV photoshoot #6');
do_photo('xv7','2007','tMitG XV photoshoot #7');
do_photo('xv8','2007','tMitG XV photoshoot #8');
do_photo('xv9','2007','tMitG XV photoshoot #9');
?>
</ul>
</section>

<section>
<h1>2006</h1>
<ul class="2006">
<?
do_photo('elysium06a','2006','tMitG live in Austin TX 2006 #1');
do_photo('elysium06b','2006','tMitG live in Austin TX 2006 #2');
do_photo('elysium06c','2006','tMitG live in Austin TX 2006 #3');
do_photo('elysium06d','2006','tMitG live in Austin TX 2006 #4');
?>
</ul>
</section>

<section>
<h1>2005</h1>
<ul class="2005">
<?
do_photo('cville1','2005','tMitG live in Charlottesville #1');
do_photo('cville2','2005','tMitG live in Charlottesville #2');
do_photo('cville3','2005','tMitG live in Charlottesville #3');
do_photo('cville4','2005','tMitG live in Charlottesville #4');
do_photo('cville5','2005','tMitG live in Charlottesville #5');
do_photo('cville8','2005','tMitG live in Charlottesville #6');
do_photo('cville9','2005','tMitG live in Charlottesville #7');
?>
</ul>
<ul class="2005">
<?
do_photo('c111','2005','tMitG live at Convergence 11 #1');
do_photo('c112','2005','tMitG live at Convergence 11 #2');
do_photo('c113','2005','tMitG live at Convergence 11 #3');
do_photo('c118','2005','tMitG live at Convergence 11 #4');
do_photo('c115','2005','tMitG live at Convergence 11 #5');
do_photo('c116','2005','tMitG live at Convergence 11 #6');
do_photo('c117','2005','tMitG live at Convergence 11 #7');
?>
</ul>
<ul class="2005">
<?
do_photo('summer1sp','2005','Summer photo session for Shadow Puppets #1');
do_photo('summer2sp','2005','Summer photo session for Shadow Puppets #2');
do_photo('summer3sp','2005','Summer photo session for Shadow Puppets #3');
do_photo('summer4sp','2005','Summer photo session for Shadow Puppets #4');
do_photo('summer8sp','2005','Summer photo session for Shadow Puppets #5');
?>
</ul>
<ul class="2005">
<?
do_photo('roger2sp','2005','Roger photo session for Shadow Puppets #1');
do_photo('roger3sp','2005','Roger photo session for Shadow Puppets #2');
do_photo('roger7sp','2005','Roger photo session for Shadow Puppets #3');
do_photo('roger9sp','2005','Roger photo session for Shadow Puppets #4');
do_photo('roger10sp','2005','Roger photo session for Shadow Puppets #5');
?>
</ul>
</section>

<section>
<h1>2002</h1>
<ul class="2002">
<?
do_photo('summercala','2002');
do_photo('summerlily','2002');
do_photo('summertulips','2002');
do_photo('rogerlily','2002');
do_photo('rogermum','2002');
do_photo('rogerpurple','2002');
?>
</ul>
<ul class="2002">
<?
do_photo('gc05','2002');
do_photo('gc06','2002');
do_photo('gc08','2002');
do_photo('gc11','2002');
?>
</ul>
</section>

<section>
<h1>2001</h1>
<ul class="2001">
<?
do_photo('4march10','2001');
do_photo('4march12','2001');
do_photo('4march15','2001');
do_photo('4march17','2001');
do_photo('4march21','2001');
do_photo('4march24','2001');
do_photo('4march2','2001');
do_photo('4march29','2001');
?>
</ul>
<ul class="2001">
<?
do_photo('tmitgla1','2001');
do_photo('rogla1','2001');
do_photo('summerla1','2001');
do_photo('summerla2','2001');
do_photo('drusummerla1','2001');
do_photo('drusummerla2','2001');
do_photo('drusummerla3','2001');
?>
</ul>
</section>

<section>
<h1>2000</h1>
<ul class="2000">
<?
do_photo('summer2','2000');
do_photo('summer3','2000');
do_photo('summer7','2000');
do_photo('summer8','2000');
do_photo('roger2','2000');
do_photo('roger4','2000');
do_photo('roger6','2000');
do_photo('roger9','2000');
?>
</ul>
<ul class="2000">
<?
do_photo('denton1','2000');
do_photo('denton3','2000');
do_photo('denton4','2000');
do_photo('denton5','2000');
?>
</ul>
<ul class="2000">
<?
do_photo('video1','2000');
do_photo('video2','2000');
do_photo('video3','2000');
do_photo('video4','2000');
do_photo('video5','2000');
?>
</ul>
</section>

<section>
<h1>1999</h1>
<ul class="1999">
<?
do_photo('dgtMitG3','1999');
do_photo('dgtMitG1','1999');
do_photo('dgtMitG4','1999');
do_photo('dgtMitG5','1999');
?>
</ul>
</section>

<section>
<h1>1997</h1>
<ul class="1997">
<?
do_photo('UWportrait','1997');
do_photo('area39','1997');
do_photo('tMitGsf3a','1997');
?>
</ul>
</section>

<section>
<h1>1996</h1>
<ul class="1996">
<?
do_photo('anricat3','1996');
do_photo('anricat1','1996');
?>
</ul>
</section>

<section>
<h1>1995</h1>
<ul class="1995">
<?
do_photo('thistle06','1995');
do_photo('thistle31','1995');
do_photo('rog15','1995');
?>
</ul>
</section>

<section>
<h1>1994</h1>
<ul class="1994">
<?
do_photo('roglive1','1994');
do_photo('roglive3','1994');
?>
</ul>
</section>

<section>
<h1>1993</h1>
<ul class="1993">
<?
do_photo('rog1','1993');
do_photo('rog2','1993');
?>
</ul>
</section>

<section>
<h1>1992</h1>
<ul class="1992">
<?
do_photo('tmitgpic2','1992');
do_photo('tmitgpic3','1992');
?>
</ul>
</section>

<section>
<h2>Photo credits:</h2>
<ul class="credits">
	<li>1992: <em>Veils and Shadows EP</em> promo photos - Roland Raquet</li>
	<li>1993: <em>Veils and Shadows EP</em> promo photos - Cinimin</li>
	<li>1994: live in Louisville, KY - Tig</li>
	<li>1995: live at Convergence I, Chicago, IL - E. Katie Holm; promo photo - William Scalia</li>
	<li>1996: promo photos - Denise Rogers</li>
	<li>1997: <em>Underworld</em> promo photo - Celine Donnelly; live in Denver, CO - Celine Donnelly; live in San Francisco, CA - Jessie Therriault</li>
	<li>1999: promo photos - Donna Clancy-Goertz</li>
	<li>2000: "The Unaware" video shoot behind the scenes - Donna Clancy-Goertz; live in Dallas, TX - Clancy-Goertz; <em>Out of the Mists</em> promo photos - Donna Clancy-Goertz</li>
	<li>2001: live in Los Angeles, CA - Dru and Wayne; promo photos - Donna Clancy-Goertz</li>
	<li>2002: live at GothCon 2002, New Orleans, LA - James Babbo; <em>Asphodel</em> promo photos - Donna Clancy-Goertz</li>
	<li>2005: <em>Shadow Puppets</em> promo photos - Roger Frac&eacute; and Summer Bowman; live in Charlottesville, VA  - Chad Van Pelt</li>
	<li>2006: live at Elysium, Austin, TX - Cindy Chang-Fricke</li>
	<li>2007: <em>XV</em> photoshoot - Cindy Chang-Fricke</li>
	<li>2011: <em>Before and After the Storm</em> photoshoot - Roger Frac&eacute; and Summer Bowman</li>
	<li>2013: live at Elysium, Austin, TX - John Nuncio</li>
	<li>2015: Mirabilis live at Secret Oktober, Austin, TX - Phil Schafer</li>
</ul>
</section>

</div> <!-- /mainbody -->

<!-- append tracking -->
<script type="text/javascript">
$(document).ready(function() {
	$('img.lazy').jail({effect:"fadeIn"});
});
</script>

</body>
</html>
