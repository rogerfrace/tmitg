<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="text-scale" content="scale">
<meta property="og:site_name" content="the Machine in the Garden" />
<?php if (!isset($fbog) || !is_array($fbog)): ?>
<meta property="og:type" content="website" />
<?php endif; ?>
<meta property="og:locale" content="en_US" />
<meta property="fb:app_id" content="121619441387">
<meta property="fb:admins" content="1120445561,713632115">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<?php 
	if ($_SERVER['PHP_SELF'] != "/news.php") {
		echo '<link rel="canonical" href="https://www.tmitg.com'.htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8').'">';
	}
?>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<?php $skip_colorbox_pages = array('/bio.php', '/contact.php', '/discog.php', '/links.php', '/live.php', '/news.php'); ?>
<?php if (check_mobile() == false && !in_array($_SERVER['PHP_SELF'], $skip_colorbox_pages, true)): ?>
<!-- colorbox -->
<link rel="stylesheet" type="text/css" href="/css/colorbox.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.6.4/jquery.colorbox-min.js" integrity="sha512-DAVSi/Ovew9ZRpBgHs6hJ+EMdj1fVKE+csL7mdf9v7tMbzM1i4c/jAvHE8AhcKYazlFl7M8guWuO3lDNzIA48A==" crossorigin="anonymous"></script>
<?php endif; ?>

<script src="tmitg.js" async></script>
<?php include_once "fontawesome.inc.php"; ?>
<link rel="stylesheet" type="text/css" href="tmitg.css">
<?php include_once "googletracking.html"; ?>
