<?php
$promoer = $_GET['receipt'];
if (!$promoer) { die("Unauthorized"); }

$to = "roger@tmitg.com";
$subject = "[tMitG Promo Download]";
$mailheaders = "From: roger@tmitg.com\n";
$msg = "BaAtS promo has been downloaded by ".$promoer;
mail($to, $subject, $msg, $mailheaders);

header("Location:tMitG-BaAtS-promopack.zip");
?>