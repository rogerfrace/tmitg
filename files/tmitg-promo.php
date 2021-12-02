<?php
$promoer = $_GET['receipt'];
if (!$promoer) { die("Unauthorized"); }
if ($promoer) { die("Promotional downloads have ended."); }

$to = "roger@tmitg.com";
$subject = "[tMitG Promo Download]";
$mailheaders = "From: roger@tmitg.com\n";
$msg = "PiB promo has been downloaded by ".$promoer."\r\n";
$msg .= date("Y/M/d h:i:sa");
mail($to, $subject, $msg, $mailheaders);

header("Location:tMitG-Places-in-Between-promopack.zip");
?>