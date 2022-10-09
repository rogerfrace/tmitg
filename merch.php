<!DOCTYPE html>
<html	lang="en" 
		prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<?php require_once("functions.php"); ?>
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
	<meta name="copyright" content="<?=date('Y',time());?>" />
	<?php include_once("headers-additional.php"); ?>
	<script>
		$(document).ready(function(){
			// from https://stackoverflow.com/questions/16553075/colorbox-add-alt-text-to-gallery-images
			$.colorbox.settings.createImg = function(){
				var img = new Image();
				var alt = $(this).attr('data-alt');
				var title = $(this).attr('data-title');

				if (alt) {
					img.alt = alt;
				}
				if (title) {
					img.title = title;
				}
				return img;
			};
			$(".imglink").colorbox({rel:'gallery', transition:"fade", width:"75%", height:"75%"});
		});
	</script>
</head>

<body id="merch">

<?php get_header(); ?>

<main class="mainbody">

<h1 class="wai">the Machine in the Garden merchandise</h1>

<section>
<p>Physical products are sold through <a rel="noopener external" href="https://tmitg.bandcamp.com/merch">Bandcamp</a>.</p>

<p><a rel="noopener external" href="https://music.apple.com/us/artist/the-machine-in-the-garden/5985533?itsct=music_box&itscg=30200&at=1000l35Bw&ls=1&app=music">Listen on Apple Music</a></p>

<p>Alternately, you can find the Machine in the Garden on <a rel="noopener external" href="https://amzn.to/3iIbi9c">amazon.com</a>.</p>
</section>

<hr />

<section aria-label="Special Offers">
<?php if (
		(date("Ymd",time()) == "20130522")
	): ?>

<div style="padding:0.5em; border:2px solid #990000;">
	13% off all orders for World Goth Day &mdash; use coupon code "GOTHDAY2013"
</div>

<?php else: ?>

<div style="padding:0.5em; border:2px solid #990000;">
For band news and special offers, be sure to follow us on <a href="http://www.facebook.com/tmitg" rel="noopener external">Facebook</a> or <a href="http://twitter.com/tmitg" rel="noopener external">Twitter</a>.
</div>

<?php endif; ?>
</section>

<hr />

<?php
// for the meta priceValidUntil
$validUntil = date('Y-m-d',strtotime(date("Y-m-d", time()) . " + 365 day"));
?>
<div role="region" aria-label="TMITG albums">

<section class="itemcontainer" vocab="https://schema.org/" typeof="Product">
<div class="itempic">
	<img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>albums/placesico.jpg" alt="places in between CD" property="image" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="https://schema.org/" typeof="Brand"><span property="name">the Machine in the Garden</span></span><br />
	<em property="name">Places in Between</em></h2>
	<meta property="sku" content="dxm-008-cd" />
	<span property="mpn">dxm-008-cd</span> &copy;<span property="releaseDate">2020</span><br />
	(<span property="description">full-length CD</span>)
	<div class="pricecart" property="offers" typeof="Offer">
		<a property="url" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>places.php">more information <span class="wai">about Places in Between</span></a><br />
		<strong class="price" property="price" content="10.00">$10</strong>
		<meta property="priceValidUntil" content="<?=$validUntil;?>" />
		<meta property="availability" content="https://schema.org/OnlineOnly">
		<meta property="priceCurrency" content="USD" />
		<meta property="gtin12" content="195269018252" />
		<a class="atcss" href="https://tmitg.bandcamp.com/album/places-in-between" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});">Buy Now <span class="wai">: Places in Between</span></a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<section class="itemcontainer" vocab="https://schema.org/" typeof="Product">
<div class="itempic">
	<img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>albums/baatsico.jpg" alt="before and after the storm CD" property="image" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="https://schema.org/" typeof="Brand"><span property="name">the Machine in the Garden</span></span><br />
	<em property="name">Before and After the Storm</em></h2>
	<meta property="sku" content="dxm-005-cdse" />
	<span property="mpn">dxm-005-cdse</span> &copy;<span property="releaseDate">2011</span><br />
	(<span property="description">Special Edition CD</span>)
	<div class="pricecart" property="offers" typeof="Offer">
		<a property="url" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>storm.php">more information <span class="wai">about Before and After the Storm</span></a><br />
		<strong class="price" style="color:#E00;">Out of Print</strong>
		<meta property="availability" content="https://schema.org/SoldOut">
		<meta property="priceCurrency" content="USD" />
		<meta property="price" content="8.00" />
		<meta property="priceValidUntil" content="<?=$validUntil;?>" />
		<meta property="gtin12" content="885767743120" />
		<a class="atcss" href="https://tmitg.bandcamp.com/album/before-and-after-the-storm" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});">Buy Digital <span class="wai">: Before and After the Storm</span></a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<br style="clear:both;" />

<section class="itemcontainer" vocab="https://schema.org/" typeof="Product">
<div class="itempic">
	<img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>albums/xvico.jpg" alt="XV CD" property="image" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="https://schema.org/" typeof="Brand"><span property="name">the Machine in the Garden</span></span><br />
	<em property="name">XV</em></h2>
	<meta property="sku" content="dxm-015-cd" />
	<span property="mpn">dxm-015-cd</span> &copy;<span property="releaseDate">2007</span><br />
	(<span property="description">full-length CD</span>)
	<div class="pricecart" property="offers" typeof="Offer">
		<a property="url" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>xv.php">more information <span class="wai">about XV</span></a><br />
		<strong class="price" property="price" content="7.00">$7</strong>
		<meta property="priceValidUntil" content="<?=$validUntil;?>" />
		<meta property="availability" content="https://schema.org/OnlineOnly">
		<meta property="priceCurrency" content="USD" />
		<meta property="gtin12" content="634479658679" />
		<a class="atcss" href="https://tmitg.bandcamp.com/album/xv" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});">Buy Now <span class="wai">: XV</span></a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<section class="itemcontainer" vocab="https://schema.org/" typeof="Product">
<div class="itempic">
	<img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>albums/spico.jpg" alt="shadow puppets CD" property="image" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="https://schema.org/" typeof="Brand"><span property="name">the Machine in the Garden</span></span><br />
	<em property="name">Shadow Puppets</em></h2>
	<meta property="sku" content="MPP975" />
	<span property="mpn">MPP975</span> &copy;<span property="releaseDate">2005</span><br />
	(<span property="description">full-length CD</span>)
	<div class="pricecart" property="offers" typeof="Offer">
		<a property="url" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>shadowpuppets.php">more information <span class="wai">about Shadow Puppets</span></a><br />
		<strong class="price" property="price" content="8.00">$8</strong>
		<meta property="priceValidUntil" content="<?=$validUntil;?>" />
		<meta property="availability" content="https://schema.org/OnlineOnly">
		<meta property="priceCurrency" content="USD" />
		<meta property="gtin12" content="685879997523" />
		<a class="atcss" href="https://tmitg.bandcamp.com/album/shadow-puppets" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});">Buy Now <span class="wai">: Shadow Puppets</span></a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<br style="clear:both;" />

<section class="itemcontainer" vocab="https://schema.org/" typeof="Product">
<div class="itempic">
	<img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>albums/asphodelico.jpg" alt="asphodel CD" property="image" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="https://schema.org/" typeof="Brand"><span property="name">the Machine in the Garden</span></span><br />
	<em property="name">Asphodel</em></h2>
	<meta property="sku" content="MPP986" />
	<span property="mpn">MPP986</span> &copy;<span property="releaseDate">2002</span><br />
	(<span property="description">full-length CD</span>)
	<div class="pricecart" property="offers" typeof="Offer">
		<a property="url" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>asphodel.php">more information <span class="wai">about Asphodel</span></a><br />
		<strong class="price" property="price" content="8.00">$8</strong>
		<meta property="priceValidUntil" content="<?=$validUntil;?>" />
		<meta property="availability" content="https://schema.org/OnlineOnly">
		<meta property="priceCurrency" content="USD" />
		<meta property="gtin12" content="685879998629" />
		<a class="atcss" href="https://tmitg.bandcamp.com/album/asphodel" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});">Buy Now <span class="wai">: Asphodel</span></a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<section class="itemcontainer" vocab="https://schema.org/" typeof="Product">
<div class="itempic">
	<img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>albums/mistsico.jpg" alt="out of the mists CD" property="image" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="https://schema.org/" typeof="Brand"><span property="name">the Machine in the Garden</span></span><br />
	<em property="name">Out of the Mists</em></h2>
	<meta property="sku" content="MPP994" />
	<span property="mpn">MPP994</span> &copy;<span property="releaseDate">2000</span><br />
	(<span property="description">full-length enhanced digipack CD</span>)
	<div class="pricecart" property="offers" typeof="Offer">
		<a property="url" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>mists.php">more information <span class="wai">about Out of the Mists</span></a><br />
		<strong class="price" property="price" content="8.00">$8</strong>
		<meta property="priceValidUntil" content="<?=$validUntil;?>" />
		<meta property="availability" content="https://schema.org/OnlineOnly">
		<meta property="priceCurrency" content="USD" />
		<meta property="gtin12" content="685879999428" />
		<a class="atcss" href="https://tmitg.bandcamp.com/album/out-of-the-mists" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});">Buy Now <span class="wai">: Out of the Mists</span></a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<br style="clear:both;" />

<section class="itemcontainer" vocab="https://schema.org/" typeof="Product">
<div class="itempic">
	<img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>albums/wintersico.jpg" alt="one winters night CD" property="image" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="https://schema.org/" typeof="Brand"><span property="name">the Machine in the Garden</span></span><br />
	<em property="name">One Winter's Night&hellip;</em></h2>
	<meta property="sku" content="MPP999" />
	<span property="mpn">MPP999</span> &copy;<span property="releaseDate">1999</span><br />
	(<span property="description">full-length digipack CD</span>)
	<div class="pricecart" property="offers" typeof="Offer">
		<a property="url" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>winters.php">more information <span class="wai">about One Winter's Night&hellip;</span></a><br />
		<strong class="price" property="price" content="8.00">$8</strong>
		<meta property="priceValidUntil" content="<?=$validUntil;?>" />
		<meta property="availability" content="https://schema.org/OnlineOnly">
		<meta property="priceCurrency" content="USD" />
		<meta property="gtin12" content="685879999923" />
		<a class="atcss" href="https://tmitg.bandcamp.com/album/one-winters-night" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});">Buy Now <span class="wai">: One Winter's Night&hellip;</span></a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<section class="itemcontainer" vocab="https://schema.org/" typeof="Product">
<div class="itempic">
	<img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>albums/underworldico.jpg" alt="underworld CD" property="image" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="https://schema.org/" typeof="Brand"><span property="name">the Machine in the Garden</span></span><br />
	<em property="name">Underworld</em></h2>
	<meta property="sku" content="dxm-001-cd" />
	<span property="mpn">dxm-001-cd</span> &copy;<span property="releaseDate">1997</span><br />
	(<span property="description">full-length CD</span>)
	<div class="pricecart" property="offers" typeof="Offer">
		<a property="url" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>underworld.php">more information <span class="wai">about Underworld</span></a><br />
		<strong class="price" style="color:#E00;">Out of Print</strong>
		<meta property="availability" content="https://schema.org/SoldOut">
		<meta property="priceCurrency" content="USD" />
		<meta property="price" content="8.00" />
		<meta property="priceValidUntil" content="<?=$validUntil;?>" />
		<meta property="gtin12" content="792733800421" />
		<a class="atcss" href="https://tmitg.bandcamp.com/album/underworld" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});">Buy Digital <span class="wai">: Underworld</span></a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<br style="clear:both;" />

<section class="itemcontainer" vocab="https://schema.org/" typeof="Product">
<div class="itempic">
	<img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>albums/vsico.jpg" alt="veils and shadows EP CD" property="image" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="https://schema.org/" typeof="Brand"><span property="name">the Machine in the Garden</span></span><br />
	<em property="name">Veils and Shadows EP</em></h2>
	<meta property="sku" content="ISOL8-002-2" />
	<span property="mpn">ISOL8-002-2</span> &copy;<span property="productionDate">1993</span><meta property="releaseDate" content="1994" /><br />
	(<span property="description">4 song CD EP</span>)
	<div class="pricecart" property="offers" typeof="Offer">
		<a property="url" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>vs.php">more information <span class="wai">about Veils and Shadows EP</span></a><br />
		<strong class="price" property="price" content="3.00">$3</strong>
		<meta property="priceValidUntil" content="<?=$validUntil;?>" />
		<meta property="availability" content="https://schema.org/OnlineOnly">
		<meta property="priceCurrency" content="USD" />
		<meta property="gtin12" content="780444900226" />
		<a class="atcss" href="https://tmitg.bandcamp.com/album/veils-and-shadows-ep" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});">Buy Now <span class="wai">: Veils and Shadows EP</span></a>
	</div>
</div>
</section> <!-- /itemcontainer -->

</div> <!-- end region -->

<br style="clear:both;" />


<div role="region" aria-label="Mirabilis albums">

<section class="itemcontainer" vocab="https://schema.org/" typeof="Product">
<div class="itempic">
	<img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>albums/hereaftersm.jpg" alt="mirabilis here and the hereafter CD" property="image" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="https://schema.org/" typeof="Brand"><span property="name">Mirabilis</span></span><br />
	<em property="name">Here and the Hereafter</em></h2>
	<span style="font-weight:normal; font-size:.75em;">(Summer's other project)</span><br />
	<meta property="sku" content="PRO307" />
	<span property="mpn">PRO307</span> &copy;<span property="releaseDate">2014</span><br />
	(<span property="description">full-length CD</span>)
	<div class="pricecart" property="offers" typeof="Offer">
		<a property="url" href="http://www.mirabilismusic.com/hereafter.php">more information <span class="wai">about Here and the Hereafter</span></a><br />
		<strong class="price" property="price" content="10.00">$10</strong>
		<meta property="priceValidUntil" content="<?=$validUntil;?>" />
		<meta property="availability" content="https://schema.org/OnlineOnly">
		<meta property="priceCurrency" content="USD" />
		<a class="atcss" href="https://projektrecords.bandcamp.com/album/here-and-the-hereafter" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});">Buy Now <span class="wai">: Here and the Hereafter</span></a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<section class="itemcontainer" vocab="https://schema.org/" typeof="Product">
<div class="itempic">
	<img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>albums/subrosaico.jpg" alt="mirabilis sub rosa CD" property="image" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="https://schema.org/" typeof="Brand"><span property="name">Mirabilis</span></span><br />
	<em property="name">Sub Rosa</em></h2>
	<span style="font-weight:normal; font-size:.75em;">(Summer's other project)</span><br />
	<meta property="sku" content="PRO207" />
	<span property="mpn">PRO207</span> &copy;<span property="releaseDate">2007</span><br />
	(<span property="description">full-length CD</span>)
	<div class="pricecart" property="offers" typeof="Offer">
		<a property="url" href="http://www.mirabilismusic.com/subrosa.php">more information <span class="wai">about Sub Rosa</span></a><br />
		<strong class="price" property="price" content="7.00">$7</strong>
		<meta property="priceValidUntil" content="<?=$validUntil;?>" />
		<meta property="availability" content="https://schema.org/OnlineOnly">
		<meta property="priceCurrency" content="USD" />
		<meta property="gtin12" content="617026020723" />
		<a class="atcss" href="https://mirabilis.bandcamp.com/album/sub-rosa" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});">Buy Now <span class="wai">: Sub Rosa</span></a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<br style="clear:both;" />

<section class="itemcontainer" vocab="https://schema.org/" typeof="Product">
<div class="itempic">
	<img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>albums/pleiadescoversm.jpg" alt="mirabilis pleiades CD" property="image" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="https://schema.org/" typeof="Brand"><span property="name">Mirabilis</span></span><br />
	<em property="name">Pleiades</em></h2>
	<span style="font-weight:normal; font-size:.75em;">(Summer's other project)</span><br />
	<meta property="sku" content="PRO206" />
	<span property="mpn">PRO206</span> &copy;<span property="productionDate">2004</span>, reissued <span property="releaseDate">2007</span><br />
	(<span property="description">full-length CD</span>)
	<div class="pricecart" property="offers" typeof="Offer">
		<a property="url" href="http://www.mirabilismusic.com/pleiades.php">more information <span class="wai">about Pleiades</span></a><br />
		<strong class="price" property="price" content="7.00">$7</strong>
		<meta property="priceValidUntil" content="<?=$validUntil;?>" />
		<meta property="availability" content="https://schema.org/OnlineOnly">
		<meta property="priceCurrency" content="USD" />
		<meta property="gtin12" content="617026020624" />
		<a class="atcss" href="https://mirabilis.bandcamp.com/album/pleiades" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});">Buy Now <span class="wai">: Pleiades</span></a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<section class="itemcontainer" vocab="https://schema.org/" typeof="Product">
<div class="itempic">
	<img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>albums/7inchsm.jpg" alt="mirabilis 7-inch" property="image" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="https://schema.org/" typeof="Brand"><span property="name">Mirabilis</span></span><br />
	<em property="name">Self-Titled 7-inch</em></h2>
	<span style="font-weight:normal; font-size:.75em;">(Summer's other project)</span><br />
	<meta property="sku" content="FD106" />
	<span property="mpn">FD106</span> &copy;2003<br />
	(<span property="description">4 song EP</span>)
	<div class="pricecart" property="offers" typeof="Offer">
		<a property="url" href="http://www.mirabilismusic.com/7inch.php">more information <span class="wai">about Mirabilis 7-inch</span></a><br />
		<strong class="price" style="color:#E00;">Out of Print</strong>
		<meta property="availability" content="https://schema.org/SoldOut">
		<meta property="priceCurrency" content="USD" />
		<meta property="price" content="3.00" />
		<meta property="priceValidUntil" content="<?=$validUntil;?>" />
		<a class="atcss" href="https://mirabilis.bandcamp.com/album/mirabilis-7-ep" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});">Buy Digital <span class="wai">: Mirabilis 7-inch</span></a>
	</div>
</div>
</section> <!-- /itemcontainer -->

</div> <!-- end region -->

<br style="clear:both;" /><hr><br />


<div role="region" aria-label="TMITG shirts">

<section class="itemcontainer" vocab="https://schema.org/" typeof="Product">
<div class="itempic">
	<a role="button" aria-haspopup="dialog" href="images/tealshirt.jpg" class="imglink" data-title="tMitG t-shirts" data-alt="vintage ornament design t-shirt" title="vintage ornament design t-shirt"><img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>images/tealshirtico.jpg" alt="tmitg vintage ornament design t-shirt" /></a>
	<meta property="image" content="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>images/tealshirt.jpg" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="https://schema.org/" typeof="Brand"><span property="name">the Machine in the Garden</span></span><br />
	<em property="name">"vintage ornament" design t-shirt</em></h2>
	<span property="description">(teal "vintage ornament" design with silver text, black short sleeve, unisex or ladies cut v-neck - click picture to view larger image)</span>
	<div class="pricecart" property="offers" typeof="Offer">
		<strong class="price" property="price" content="12.00">$12</strong>
		<meta property="priceValidUntil" content="<?=$validUntil;?>" />
		<meta property="availability" content="https://schema.org/OnlineOnly">
		<meta property="priceCurrency" content="USD" />
		<a class="atcss" href="https://tmitg.bandcamp.com/merch/tmitg-vintage-ornament-design-t-shirt" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});">Buy Now <span class="wai">: vintage ornament design t-shirt</span></a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<section class="itemcontainer" vocab="https://schema.org/" typeof="Product">
<div class="itempic">
	<a role="button" aria-haspopup="dialog" href="images/redshirt.jpg" class="imglink" data-title="tMitG t-shirts" data-alt="red design t-shirt" title="red design t-shirt"><img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>images/redshirtico.jpg" alt="tmitg red design t-shirt" /></a>
	<meta property="image" content="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>images/redshirt.jpg" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="https://schema.org/" typeof="Brand"><span property="name">the Machine in the Garden</span></span><br />
	<em property="name">red design t-shirt</em></h2>
	<span property="description">(red spiral with white text - click picture to view larger image)<br /><br />
	short-sleeve (M, L, or XL)</span>
	<div class="pricecart" property="offers" typeof="Offer">
		<strong class="price" property="price" content="8.00">$8</strong>
		<meta property="priceValidUntil" content="<?=$validUntil;?>" />
		<meta property="availability" content="https://schema.org/OnlineOnly">
		<meta property="priceCurrency" content="USD" />
		<a class="atcss" href="https://tmitg.bandcamp.com/merch/tmitg-red-design-shirt" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});">Buy Now <span class="wai">: red design t-shirt</span></a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<br style="clear:both;" />
   
<section class="itemcontainer" vocab="https://schema.org/" typeof="Product">
<div class="itempic">
	<a role="button" aria-haspopup="dialog" href="images/redbandedtshirt.jpg" class="imglink" data-title="tMitG t-shirts" data-alt="red design baby-doll shirt" title="red design baby-doll shirt"><img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>images/redbandedico.jpg" alt="tmitg red design baby-doll" /></a>
	<meta property="image" content="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>images/redbandedtshirt.jpg" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="https://schema.org/" typeof="Brand"><span property="name">the Machine in the Garden</span></span><br />
	<em property="name">red design t-shirt (baby-doll)</em></h2>
	<span property="description">(red spiral with white text - click picture to view larger image)<br /><br />
	baby-doll with red bands on collar and sleeves (M, L, or XL)</span>
	<div class="pricecart" property="offers" typeof="Offer">
		<strong class="price" property="price" content="10.00">$10</strong>
		<meta property="priceValidUntil" content="<?=$validUntil;?>" />
		<meta property="availability" content="https://schema.org/OnlineOnly">
		<meta property="priceCurrency" content="USD" />
		<a class="atcss" href="https://tmitg.bandcamp.com/merch/tmitg-red-design-baby-doll-shirt" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});">Buy Now <span class="wai">: red design baby doll shirt</span></a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<section class="itemcontainer" vocab="https://schema.org/" typeof="Product">
<div class="itempic">
	<a role="button" aria-haspopup="dialog" href="images/redshirtraglan.jpg" class="imglink" data-title="tMitG t-shirts" data-alt="red design ladies raglan shirt" title="red design ladies raglan shirt"><img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>images/redshirtraglanico.jpg" alt="tmitg red design ladies raglan shirt" /></a>
	<meta property="image" content="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>images/redshirtraglan.jpg" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="https://schema.org/" typeof="Brand"><span property="name">the Machine in the Garden</span></span><br />
	<em property="name">red design t-shirt (raglan)</em></h2>
	<span property="description">(red spiral with white text - click picture to view larger image)<br /><br />ladies shirt with &frac34; length red raglan sleeves (M or L)</span>
	<div class="pricecart" property="offers" typeof="Offer">
		<strong class="price" property="price" content="12.00">$12</strong>
		<meta property="priceValidUntil" content="<?=$validUntil;?>" />
		<meta property="availability" content="https://schema.org/OnlineOnly">
		<meta property="priceCurrency" content="USD" />
		<a class="atcss" href="https://tmitg.bandcamp.com/merch/tmitg-red-design-raglan-shirt" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});">Buy Now <span class="wai">: red design raglan shirt</span></a>
	</div>
</div>
</section> <!-- /itemcontainer -->

<br style="clear:both;" />
 
<section class="itemcontainer" vocab="https://schema.org/" typeof="Product">
<div class="itempic">
	<a role="button" aria-haspopup="dialog" href="images/tulipshirt.jpg" class="imglink" data-title="tMitG t-shirts" data-alt="tulip t-shirt" title="tulip t-shirt"><img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>images/tulipshirtico.jpg" alt="tmitg tulip t-shirt" /></a>
	<meta property="image" content="<?php echo "http://".$_SERVER['HTTP_HOST']."/"; ?>images/tulipshirt.jpg" />
</div>
<div class="itemdesc">
	<h2><span property="brand" vocab="https://schema.org/" typeof="Brand"><span property="name">the Machine in the Garden</span></span><br />
	<em property="name">tulip t-shirt</em></h2>
	<span property="description">(purple tulip with silver text - click picture to view larger image)<br /><br />long-sleeve (XL)</span>
	<div class="pricecart" property="offers" typeof="Offer">
		<strong class="price" property="price" content="10.00">$10</strong>
		<meta property="priceValidUntil" content="<?=$validUntil;?>" />
		<meta property="availability" content="https://schema.org/OnlineOnly">
		<meta property="priceCurrency" content="USD" />
			<a class="atcss" href="https://tmitg.bandcamp.com/merch/tmitg-tulip-long-sleeve-shirt" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});">Buy Now <span class="wai">: tulip long sleeve shirt</span></a>
		</div>
	</div>
</div>
</section> <!-- /itemcontainer -->

</div> <!-- end region -->

      <br style="clear:both;" /><br />

</main>

</body>
</html>
