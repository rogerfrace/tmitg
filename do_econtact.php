<?php
session_start();

function trackme($reason="other") {
	echo "<script type=\"text/javascript\">_gaq.push(['_trackPageview','/do_econtact.php/".$reason."');</script>";
}

// simplest XSS function ever, in case i ever want it
function removeJS($str) {
	// decode the possible entities 
	$str = html_entity_decode($str);
	// personal removal of bad cookie javascript
	$str = str_ireplace("<script>", "", $str);
	$str = str_ireplace("</script>", "", $str);
	$str = str_ireplace("script>", "", $str);
	$str = str_ireplace("<script", "", $str);
	$str = str_ireplace("document.cookie", "", $str); 
	$str = str_ireplace("window.location", "", $str);
	$str = str_ireplace("'>\">", "", $str);
	$str = str_ireplace("alert(", "", $str);
	$str = str_ireplace(")", "", $str);
	return $str;
}     

?>
<!DOCTYPE HTML>
<html lang="en">
<?php require_once("functions.php"); ?>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="title" content="the Machine in the Garden - contact">
	<meta name="Copyright" content="<?=date('Y',time());?>">
	<title>the Machine in the Garden - contact</title>
	<?php include_once("headers-additional.php"); ?>
	<link rel="stylesheet" type="text/css" href="tmitg.css">
	<?php include_once("fontawesome.inc.php"); ?>
	<?php include_once("googletracking.html"); ?>
</head>

<body>

<?
// set POST variables
$vars = array('name', 'email', 'to', 'subject', 'message', 'timestamp', 'referrer', 'honeypot');
foreach ($vars as $v) {
  if (isset($_POST[$v])) {
    $$v = $_POST[$v];
  }
}

// send raw var_dump to roger
ob_start();
var_dump($_POST);
$rmsg = ob_get_clean();

get_header();

echo "<p>&nbsp;</p>
	<div class=\"mainbody\">";

// for debugging
$raw_to = $to;
$raw_name = $name;
$raw_email = $email;
$raw_subject = $subject;


// check for blank fields
if ((!$to) || (!$name) || (!$email) || (!$subject) || (!$message))
	{
	echo "<font color=red><b>You did not completely fill in the form. Please go back and complete the form before submitting.</b></font>"; trackme("error-blank-fields"); die;
	}

// spam check the FROM and SUBJECT fields
if ((strstr($email, '\\\\')) || (stristr($email, 'bcc:'))) {
	echo "<font color=red><b>There was a syntax error in your email address. Please go back and correct your address before submitting.</b></font>"; trackme("error-from-field"); die;
} elseif ((strstr($subject, '\\\\')) || (stristr($subject, 'bcc:'))) {
	echo "<font color=red><b>There was a syntax error in your subject. Please go back and correct the email subject before submitting.</b></font>"; trackme("error-subject-field"); die;
// does the subject contain an html anchor
} elseif (stristr($message, '<a href=')) {
	echo "<font color=red><b>There was a syntax error in your message. Please go back and correct the email body before submitting.</b></font>"; trackme("error-subject-anchor"); die;
// checking for robots with time delay
} elseif ((time() < ($timestamp+5)) || (time() > ($timestamp+(8*60)))) {
	echo "<font color=red><b>There was a probem with your submission (error 1). Please go back and try again.</b></font>"; trackme("error-fast-submit"); die;
// make sure TO is an integer
} elseif (!is_int(intval($to))) {
	echo "<font color=red><b>Invalid recipient. Please go back and try again.</b></font>"; trackme("error-invalid-recipient"); die;
// check for the double-slash in the referral
} elseif (strstr($_SERVER['HTTP_REFERER'],'com//contact')) {
	echo "<font color=red><b>There was a probem with your submission (error 2). Please go back and try again.</b></font>"; trackme("error-double-slash-referral"); die;
// check the honeypot
} elseif ($honeypot != "") {
	echo "<font color=red><b>There was a probem with your submission (error 3). Please go back and try again.</b></font>"; trackme("error-honeypot"); die;
}

// check for lots of URLs in the message
$splitmessage = explode("http:",$message);
if (count($splitmessage) > 4) {
	echo "<font color=red><b>Too many URLs in the message (spam filter). Please go back and try again.</b></font>"; trackme("error-too-many-urls"); die;
}

//sanitize for XSS
$message = removeJS($message);

// if it suvived the spam check, send me raw output
mail('roger@tmitg.com','tMitG form var_dump',$rmsg);
//

// who to mail to
$to_address[1] = "tmitg@tmitg.com"; //the band
$to_address[2] = "summer@tmitg.com"; //Summer
$to_address[3] = "roger@tmitg.com"; //Roger
$to_address[5] = "tmitg@tmitg.com"; //Promotional Inquiries
$to_address[6] = "tmitg@tmitg.com"; //Merchandise Order Inquiries
$to_address[7] = "roger@tmitg.com"; //Web Site Problems
$to_address[8] = "booking@tmitg.com"; //Booking

// build and send the email
	$to = "$to_address[$to]";
	$subject = "[tMitG Web Form] $subject";
	$mailheaders = "From: $name <$email>\n";
	$mailheaders .= "Reply-To: $email";
$msg = "tMitG Web Contact Form:\n
$message\n
\n
------------------------------
debug info:
timestamps: $timestamp / ".time()." (diff ".(time()-$timestamp)." seconds)
remote agent: ".$_SERVER['HTTP_USER_AGENT']."
remote address: ".$_SERVER['REMOTE_ADDR']."
form referrer: $referrer
submit referrer: ".$_SERVER['HTTP_REFERER']."
real from name: $raw_name
real from email: $raw_email
real to: $raw_to
real subject: $raw_subject
";

$msg = stripslashes($msg);

	mail($to, $subject, $msg, $mailheaders) or $mailerror="<p class=body><font color=red>There has been a problem sending your email.<br>Please contact the <a href=\"mailto:tmitg@tmitg.com\">webmaster</a>.</font></p>";

	if ($mailerror != "") {
		echo "$mailerror";
		trackme("error-send-problem");
	}
	else {
		echo "<p class=subhead>Your email has been sent. Thank you.</p>";
		trackme("success");
	}

?>

</div>

<?php session_destroy(); ?>
</body>
</html>