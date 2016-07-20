<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE html>
<html	lang="en" 
		prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<? require_once("functions.php"); ?>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>the Machine in the Garden - merchandise</title>
	<meta name="title" content="the Machine in the Garden - merchandise" />
	<meta name="description" content="CDs and t-shirts of the Machine in the Garden and Mirabilis" />
	<meta name="language" content="en-US" />
	<meta property="og:site_name" content="the Machine in the Garden" />
	<meta property="og:title" content="the Machine in the Garden - merchandise" />
	<meta property="og:url" content="http://www.tmitg.com/merch.php" />
	<meta property="og:image" content="http://www.tmitg.com/albums/baats.jpg" />
	<meta property="og:description" content="CDs and t-shirts of the Machine in the Garden and Mirabilis" />
    <meta property="og:locale" content="en_US" />
    <meta property="fb:app_id" content="145634995501895">
    <meta property="fb:admins" content="1120445561,713632115">
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@tmitg" />
	<meta name="twitter:creator" content="@tmitg" />
	<script src="js/jquery.tools.min.js" type="text/javascript"></script>
	<script src="tmitg.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="tmitg.css" media="screen" />
	<?php include_once("headers-additional.php"); ?>
	<meta name="copyright" content="<?=date('Y',time());?>" />
	<? include_once("googletracking.html"); ?>
</head>

<body id="merch">

<? get_header(); ?>

<div class="mainbody" role="main">

<section>
<h4>Physical products are sold through <a href="https://tmitg.bandcamp.com/merch">Bandcamp</a> and <a href="http://www.cdbaby.com/Artist/TheMachineintheGarden">CDBaby</a>.</h4>

<p>Alternately, you may visit the Machine in the Garden and Mirabilis store at <a href="http://astore.amazon.com/themachininth-20">amazon.com</a> or various retailers listed on <a href="links.php#cds">our links page</a>.</p>
</section>

<hr />

<section>
<?php if (
		(date("Ymd",time()) == "20130522")
	): ?>

<div style="padding:0.5em; background-color: #EEEEEE; border:2px solid #990000;">
	13% off all orders for World Goth Day &mdash; use coupon code "GOTHDAY2013"
</div>

<?php else: ?>

<div style="padding:0.5em; background-color: #EEEEEE; border:2px solid #990000;">
	We are now offering free domestic standard shipping for all orders.<br /><br />
	For band news and special offers, be sure to follow us on <a href="http://www.facebook.com/tmitg" rel="external">Facebook</a>, <a href="http://twitter.com/tmitg" rel="external">Twitter</a> or <a href="https://plus.google.com/111746563913739447111/" rel="external">Google+</a>.
</div>

<?php endif; ?>
</section>

<hr />

<section class="itemcontainer" vocab="http://schema.org/" typeof="Product">
<div class="itempic">
	<img src="<? echo "http://".$_SERVER['HTTP_HOST']."/"; ?>albums/baatsico.jpg" alt="xv cd" property="image" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="http://schema.org/" typeof="Brand"><span property="name">the Machine in the Garden</span></span><br />
	<em property="name">Before and After the Storm</em></h2>
	<span property="mpn">dxm-005-cdse</span> &copy;<span property="releaseDate">2011</span><br />
	(<span property="description">Special Edition CD</span>)<br />
	<a href="storm.php">more information <span class="wai">about Before and After the Storm</span></a><br />
	<div class="pricecart" property="offers" typeof="Offer">
		<strong class="price" style="color:#900;">Out of Print</strong>
		<meta property="availability" content="http://schema.org/SoldOut">
		<meta property="priceCurrency" content="USD" />
		<meta property="gtin12" content="885767743120" />
		<a class="atcss" href="https://tmitg.bandcamp.com/album/before-and-after-the-storm" onclick="ga('send', 'event', 'BuyNow', 'Bandcamp', 'baats');">Buy Digital <span class="wai">Before and After the Storm</span></a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<section class="itemcontainer" vocab="http://schema.org/" typeof="Product">
<div class="itempic">
	<img src="<? echo "http://".$_SERVER['HTTP_HOST']."/"; ?>albums/xvico.jpg" alt="xv cd" property="image" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="http://schema.org/" typeof="Brand"><span property="name">the Machine in the Garden</span></span><br />
	<em property="name">XV</em></h2>
	<span property="mpn">dxm-015-cd</span> &copy;<span property="releaseDate">2007</span><br />
	(<span property="description">full length CD</span>)<br />
	<a href="xv.php">more information <span class="wai">about XV</span></a><br />
	<div class="pricecart" property="offers" typeof="Offer">
		<strong class="price" property="price">$7</strong>
		<meta property="availability" content="http://schema.org/OnlineOnly">
		<meta property="priceCurrency" content="USD" />
		<meta property="gtin12" content="634479658679" />
		<a class="atcss" href="https://tmitg.bandcamp.com/album/xv" onclick="ga('send', 'event', 'BuyNow', 'Bandcamp', 'xv');">Buy <span class="wai">XV</span> Now</a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<br style="clear:both;" />

<section class="itemcontainer" vocab="http://schema.org/" typeof="Product">
<div class="itempic">
	<img src="<? echo "http://".$_SERVER['HTTP_HOST']."/"; ?>albums/spico.jpg" alt="shadow puppets cd" property="image" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="http://schema.org/" typeof="Brand"><span property="name">the Machine in the Garden</span></span><br />
	<em property="name">Shadow Puppets</em></h2>
	<span property="mpn">MPP975</span> &copy;<span property="releaseDate">2005</span><br />
	(<span property="description">full length CD</span>)<br />
	<a href="shadowpuppets.php">more information <span class="wai">about Shadow Puppets</span></a><br />
	<div class="pricecart" property="offers" typeof="Offer">
		<strong class="price" property="price">$8</strong>
		<meta property="availability" content="http://schema.org/OnlineOnly">
		<meta property="priceCurrency" content="USD" />
		<meta property="gtin12" content="685879997523" />
		<a class="atcss" href="https://tmitg.bandcamp.com/album/shadow-puppets" onclick="ga('send', 'event', 'BuyNow', 'Bandcamp', 'shadowpuppets');">Buy <span class="wai">Shadow Puppets</span> Now</a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<section class="itemcontainer" vocab="http://schema.org/" typeof="Product">
<div class="itempic">
	<img src="<? echo "http://".$_SERVER['HTTP_HOST']."/"; ?>albums/asphodelico.jpg" alt="asphodel cd" property="image" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="http://schema.org/" typeof="Brand"><span property="name">the Machine in the Garden</span></span><br />
	<em property="name">Asphodel</em></h2>
	<span property="mpn">MPP986</span> &copy;<span property="releaseDate">2002</span><br />
	(<span property="description">full length CD</span>)<br />
	<a href="asphodel.php">more information <span class="wai">about Asphodel</span></a><br />
	<div class="pricecart" property="offers" typeof="Offer">
		<strong class="price" property="price">$8</strong>
		<meta property="availability" content="http://schema.org/OnlineOnly">
		<meta property="priceCurrency" content="USD" />
		<meta property="gtin12" content="685879998629" />
		<a class="atcss" href="https://tmitg.bandcamp.com/album/asphodel" onclick="ga('send', 'event', 'BuyNow', 'bandcamp', 'asphodel');">Buy <span class="wai">Asphodel</span> Now</a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<br style="clear:both;" />

<section class="itemcontainer" vocab="http://schema.org/" typeof="Product">
<div class="itempic">
	<img src="<? echo "http://".$_SERVER['HTTP_HOST']."/"; ?>albums/mistsico.jpg" alt="out of the mists cd" property="image" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="http://schema.org/" typeof="Brand"><span property="name">the Machine in the Garden</span></span><br />
	<em property="name">Out of the Mists</em></h2>
	<span property="mpn">MPP994</span> &copy;<span property="releaseDate">2000</span><br />
	(<span property="description">full length enhanced digipack CD</span>)<br />
	<a href="mists.php">more information <span class="wai">about Out of the Mists</span></a><br />
	<div class="pricecart" property="offers" typeof="Offer">
		<strong class="price" property="price">$8</strong>
		<meta property="availability" content="http://schema.org/OnlineOnly">
		<meta property="priceCurrency" content="USD" />
		<meta property="gtin12" content="685879999428" />
		<a class="atcss" href="https://tmitg.bandcamp.com/album/out-of-the-mists" onclick="ga('send', 'event', 'BuyNow', 'Bandcamp', 'mists');">Buy <span class="wai">Out of the Mists</span> Now</a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<section class="itemcontainer" vocab="http://schema.org/" typeof="Product">
<div class="itempic">
	<img src="<? echo "http://".$_SERVER['HTTP_HOST']."/"; ?>albums/wintersico.jpg" alt="one winters night cd" property="image" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="http://schema.org/" typeof="Brand"><span property="name">the Machine in the Garden</span></span><br />
	<em property="name">One Winter's Night&hellip;</em></h2>
	<span property="mpn">MPP999</span> &copy;<span property="releaseDate">1999</span><br />
	(<span property="description">full length digipack CD</span>)<br />
	<a href="winters.php">more information <span class="wai">about One Winter's Night&hellip;</span></a><br />
	<div class="pricecart" property="offers" typeof="Offer">
		<strong class="price" property="price">$8</strong>
		<meta property="availability" content="http://schema.org/OnlineOnly">
		<meta property="priceCurrency" content="USD" />
		<meta property="gtin12" content="685879999923" />
		<a class="atcss" href="https://tmitg.bandcamp.com/album/one-winters-night" onclick="ga('send', 'event', 'BuyNow', 'Bandcamp', 'winters');">Buy <span class="wai">One Winter's Night&hellip;</span> Now</a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<br style="clear:both;" />

<section class="itemcontainer" vocab="http://schema.org/" typeof="Product">
<div class="itempic">
	<img src="<? echo "http://".$_SERVER['HTTP_HOST']."/"; ?>albums/underworldico.jpg" alt="underworld cd" property="image" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="http://schema.org/" typeof="Brand"><span property="name">the Machine in the Garden</span></span><br />
	<em property="name">Underworld</em></h2>
	<span property="mpn">dxm-001-cd</span> &copy;<span property="releaseDate">1997</span><br />
	(<span property="description">full length CD</span>)<br />
	<a href="underworld.php">more information <span class="wai">about Underworld</span></a><br />
	<div class="pricecart" property="offers" typeof="Offer">
		<strong class="price" style="color:#900;">Out of Print</strong>
		<meta property="availability" content="http://schema.org/SoldOut">
		<meta property="priceCurrency" content="USD" />
		<meta property="gtin12" content="792733800421" />
		<a class="atcss" href="https://tmitg.bandcamp.com/album/underworld" onclick="ga('send', 'event', 'BuyNow', 'Bandcamp', 'underworld');">Buy Digital <span class="wai">Underworld</span></a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<section class="itemcontainer" vocab="http://schema.org/" typeof="Product">
<div class="itempic">
	<img src="<? echo "http://".$_SERVER['HTTP_HOST']."/"; ?>albums/vsico.jpg" alt="veils and shadows cd" property="image" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="http://schema.org/" typeof="Brand"><span property="name">the Machine in the Garden</span></span><br />
	<em property="name">Veils and Shadows EP</em></h2>
	<span property="mpn">ISOL8-002-2</span> &copy;<span property="productionDate">1993</span><meta property="releaseDate" content="1994" /><br />
	(<span property="description">4 song CD EP</span>)<br />
	<a href="vs.php">more information <span class="wai">about Veils and Shadows EP</span></a><br />
	<div class="pricecart" property="offers" typeof="Offer">
		<strong class="price" property="price">$3</strong>
		<meta property="availability" content="http://schema.org/OnlineOnly">
		<meta property="priceCurrency" content="USD" />
		<meta property="gtin12" content="780444900226" />
		<a class="atcss" href="https://tmitg.bandcamp.com/album/veils-and-shadows-ep" onclick="ga('send', 'event', 'BuyNow', 'Bandcamp', 'vsep');">Buy <span class="wai">Veils and Shadows EP</span> Now</a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<br style="clear:both;" />

<section class="itemcontainer" vocab="http://schema.org/" typeof="Product">
<div class="itempic">
	<img src="<? echo "http://".$_SERVER['HTTP_HOST']."/"; ?>albums/hereaftersm.jpg" alt="mirabilis here and the hereafter cd" property="image" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="http://schema.org/" typeof="Brand"><span property="name">Mirabilis</span></span><br />
	<em property="name">Here and the Hereafter</em></h2>
	<span style="font-weight:normal; font-size:.75em;">(Summer's other project)</span><br />
	<span property="mpn">PRO307</span> &copy;<span property="releaseDate">2014</span><br />
	(<span property="description">full length CD</span>)<br />
	<a href="http://www.mirabilismusic.com/hereafter.php">more information <span class="wai">about Here and the Hereafter</span></a><br />
	<div class="pricecart" property="offers" typeof="Offer">
		<strong class="price" property="price">$10</strong>
		<meta property="availability" content="http://schema.org/OnlineOnly">
		<meta property="priceCurrency" content="USD" />
		<a class="atcss" href="https://projektrecords.bandcamp.com/album/here-and-the-hereafter" onclick="ga('send', 'event', 'BuyNow', 'Bandcamp', 'hereafter');">Buy <span class="wai">Here and the Hereafter</span> Now</a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<section class="itemcontainer" vocab="http://schema.org/" typeof="Product">
<div class="itempic">
	<img src="<? echo "http://".$_SERVER['HTTP_HOST']."/"; ?>albums/subrosaico.jpg" alt="mirabilis sub rosa cd" property="image" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="http://schema.org/" typeof="Brand"><span property="name">Mirabilis</span></span><br />
	<em property="name">Sub Rosa</em></h2>
	<span style="font-weight:normal; font-size:.75em;">(Summer's other project)</span><br />
	<span property="mpn">PRO207</span> &copy;<span property="releaseDate">2007</span><br />
	(<span property="description">full length CD</span>)<br />
	<a href="http://www.mirabilismusic.com/subrosa.php">more information <span class="wai">about Sub Rosa</span></a><br />
	<div class="pricecart" property="offers" typeof="Offer">
		<strong class="price" property="price">$7</strong>
		<meta property="availability" content="http://schema.org/OnlineOnly">
		<meta property="priceCurrency" content="USD" />
		<meta property="gtin12" content="617026020723" />
		<a class="atcss" href="https://mirabilis.bandcamp.com/album/sub-rosa" onclick="ga('send', 'event', 'BuyNow', 'Bandcamp', 'subrosa');">Buy <span class="wai">Sub Rosa</span> Now</a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<br style="clear:both;" />

<section class="itemcontainer" vocab="http://schema.org/" typeof="Product">
<div class="itempic">
	<img src="<? echo "http://".$_SERVER['HTTP_HOST']."/"; ?>albums/pleiadescoversm.jpg" alt="mirabilis pleiades cd" property="image" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="http://schema.org/" typeof="Brand"><span property="name">Mirabilis</span></span><br />
	<em property="name">Pleiades</em></h2>
	<span style="font-weight:normal; font-size:.75em;">(Summer's other project)</span><br />
	<span property="mpn">PRO206</span> &copy;<span property="productionDate">2004</span>, reissued <span property="releaseDate">2007</span><br />
	(<span property="description">full length CD</span>)<br />
	<a href="http://www.mirabilismusic.com/pleiades.php">more information <span class="wai">about Pleiades</span></a><br />
	<div class="pricecart" property="offers" typeof="Offer">
		<strong class="price" property="price">$7</strong>
		<meta property="availability" content="http://schema.org/OnlineOnly">
		<meta property="priceCurrency" content="USD" />
		<meta property="gtin12" content="617026020624" />
		<a class="atcss" href="https://mirabilis.bandcamp.com/album/pleiades" onclick="ga('send', 'event', 'BuyNow', 'Bandcamp', 'pleiades');">Buy <span class="wai">Pleiades</span> Now</a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<section class="itemcontainer" vocab="http://schema.org/" typeof="Product">
<div class="itempic">
	<img src="<? echo "http://".$_SERVER['HTTP_HOST']."/"; ?>albums/7inchsm.jpg" alt="mirabilis 7-inch" property="image" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="http://schema.org/" typeof="Brand"><span property="name">Mirabilis</span></span><br />
	<em property="name">Self-Titled 7-inch</em></h2>
	<span style="font-weight:normal; font-size:.75em;">(Summer's other project)</span><br />
	<span property="mpn">FD106</span> &copy;2003<br />
	(<span property="description">4 song EP</span>)<br />
	<a href="http://www.mirabilismusic.com/7inch.php">more information <span class="wai">about Mirabilis 7-inch</span></a><br />
	<div class="pricecart" property="offers" typeof="Offer">
		<strong class="price" style="color:#900;">Out of Print</strong>
		<meta property="availability" content="http://schema.org/SoldOut">
		<meta property="priceCurrency" content="USD" />
		<a class="atcss" href="https://mirabilis.bandcamp.com/album/mirabilis-7-ep" onclick="ga('send', 'event', 'BuyNow', 'Bandcamp', 'mirabilis7');">Buy Digital <span class="wai">Mirabilis 7-inch</span></a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<br style="clear:both;" /><hr><br />

<section class="itemcontainer" vocab="http://schema.org/" typeof="Product">
<div class="itempic">
	<a href="images/redshirt.jpg" data-sb="shadowbox[merch]" title="red design t-shirt"><img src="<? echo "http://".$_SERVER['HTTP_HOST']."/"; ?>images/redshirtico.jpg" alt="Red design t-shirt" /></a>
	<meta property="image" content="<? echo "http://".$_SERVER['HTTP_HOST']."/"; ?>images/redshirt.jpg" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="http://schema.org/" typeof="Brand"><span property="name">the Machine in the Garden</span></span><br />
	<em property="name">red design t-shirt</em></h2>
	<span property="description">(red spiral with white text - click picture to view larger image)<br /><br />
	short-sleeve (M, L, or XL)</span>
	<div class="pricecart" property="offers" typeof="Offer">
		<strong class="price" property="price">$10</strong>
		<meta property="availability" content="http://schema.org/OnlineOnly">
		<meta property="priceCurrency" content="USD" />
		<a class="atcss" href="https://tmitg.bandcamp.com/merch/tmitg-red-design-shirt" onclick="ga('send', 'event', 'BuyNow', 'Bandcamp', 'redshirt');">Buy <span class="wai">red design t-shirt</span> Now</a>
	</div>
</div>
</section> <!-- /itemcontainer -->
   
<section class="itemcontainer" vocab="http://schema.org/" typeof="Product">
<div class="itempic">
	<a href="images/redbandedtshirt.jpg" data-sb="shadowbox[merch]" title="red design baby-doll"><img src="<? echo "http://".$_SERVER['HTTP_HOST']."/"; ?>images/redbandedico.jpg" alt="Red design baby-doll" /></a>
	<meta property="image" content="<? echo "http://".$_SERVER['HTTP_HOST']."/"; ?>images/redbandedtshirt.jpg" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="http://schema.org/" typeof="Brand"><span property="name">the Machine in the Garden</span></span><br />
	<em property="name">red design t-shirt (baby-doll)</em></h2>
	<span property="description">(red spiral with white text - click picture to view larger image)<br /><br />
	baby-doll with red bands on collar and sleeves (M, L, or XL)</span>
	<div class="pricecart" property="offers" typeof="Offer">
		<strong class="price" property="price">$12</strong>
		<meta property="availability" content="http://schema.org/OnlineOnly">
		<meta property="priceCurrency" content="USD" />
		<a class="atcss" href="https://tmitg.bandcamp.com/merch/tmitg-red-design-baby-doll-shirt" onclick="ga('send', 'event', 'BuyNow', 'Bandcamp', 'redbd');">Buy <span class="wai">red design baby doll shirt</span> Now</a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<br style="clear:both;" />

<section class="itemcontainer" vocab="http://schema.org/" typeof="Product">
<div class="itempic">
	<a href="images/redshirtraglan.jpg" data-sb="shadowbox[merch]" title="red design ladies raglan"><img src="<? echo "http://".$_SERVER['HTTP_HOST']."/"; ?>images/redshirtraglanico.jpg" alt="Red design raglan shirt" /></a>
	<meta property="image" content="<? echo "http://".$_SERVER['HTTP_HOST']."/"; ?>images/redshirtraglan.jpg" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="http://schema.org/" typeof="Brand"><span property="name">the Machine in the Garden</span></span><br />
	<em property="name">red design t-shirt (raglan)</em></h2>
	<span property="description">(red spiral with white text - click picture to view larger image)<br /><br />
	ladies shirt with 3/4 length red raglan sleeves (M or L)</span>
	<div class="pricecart" property="offers" typeof="Offer">
		<strong class="price" property="price">$14</strong>
		<meta property="availability" content="http://schema.org/OnlineOnly">
		<meta property="priceCurrency" content="USD" />
		<a class="atcss" href="https://tmitg.bandcamp.com/merch/tmitg-red-design-raglan-shirt" onclick="ga('send', 'event', 'BuyNow', 'Bandcamp', 'redraglan');">Buy <span class="wai">red design raglan shirt</span> Now</a>
	</div>
</div>
</section> <!-- /itemcontainer -->
 
<section class="itemcontainer" vocab="http://schema.org/" typeof="Product">
<div class="itempic">
	<a href="images/tulipshirt.jpg" data-sb="shadowbox[merch]" title="tulip t-shirt"><img src="<? echo "http://".$_SERVER['HTTP_HOST']."/"; ?>images/tulipshirtico.jpg" alt="Tulip t-shirt" /></a>
	<meta property="image" content="<? echo "http://".$_SERVER['HTTP_HOST']."/"; ?>images/tulipshirt.jpg" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="http://schema.org/" typeof="Brand"><span property="name">the Machine in the Garden</span></span><br />
	<em property="name">tulip t-shirt</em></h2>
	(<span property="description">purple tulip with silver text - click picture to view larger image</span>)<br /><br />

	<div typeof="IndividualProduct" resource="#product">
		<span property="description">baby-doll (M or L &mdash; <em>note: the medium shirt runs small and short but is also somewhat stretchy, approx. 30&Prime; around the bust and 14&Prime; from neckline to bottom</em>)</span>
		<div class="pricecart" property="offers" typeof="Offer">
			<strong class="price" property="price">$6</strong>
			<meta property="availability" content="http://schema.org/OnlineOnly">
			<meta property="priceCurrency" content="USD" />
			<a class="atcss" href="https://tmitg.bandcamp.com/merch/tmitg-tulip-baby-doll-shirt" onclick="ga('send', 'event', 'BuyNow', 'Bandcamp', 'tulipbd');">Buy <span class="wai">tulip baby doll shirt</span> Now</a>
		</div>
	</div>

		<br />

	<div typeof="IndividualProduct" resource="#product">
		<span property="description">long-sleeve (L or XL)</span>
		<div class="pricecart" property="offers" typeof="Offer">
			<strong class="price" property="price">$10</strong>
			<meta property="availability" content="http://schema.org/OnlineOnly">
			<meta property="priceCurrency" content="USD" />
			<a class="atcss" href="https://tmitg.bandcamp.com/merch/tmitg-tulip-long-sleeve-shirt" onclick="ga('send', 'event', 'BuyNow', 'Bandcamp', 'tulipls');">Buy <span class="wai">tulip long sleeve shirt</span> Now</a>
		</div>
	</div>
</div>
</section> <!-- /itemcontainer -->
    
      <br style="clear:both;" /><br />

</div>

</body>
</html>
