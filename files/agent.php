<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta content="minimum-scale=1.0, initial-scale=1, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<title>Agent</title>
</head>
<body>

<p><b>javascript:</b><br>
<script>
	document.write("platform: "+navigator.platform+"<br>");
	document.write("appname: "+navigator.appName+"<br>");
	document.write("version: "+navigator.appVersion+"<br>");
	document.write("OS: "+navigator.oscpu+"<br>");
	document.write("product: "+navigator.product+"<br>");
	document.write("agent: "+navigator.userAgent+"<br>");
	document.write("vendor: "+navigator.vendor+"<br>");
	document.write("this window clientWidth: "+document.body.clientWidth+" (or innerWidth "+window.innerWidth+")<br>");
	document.write("this window clientHeight: "+document.body.clientHeight+" (or innerHeight "+window.innerHeight+")<br>");
</script>

<br>
<hr>

<p><b>PHP $_SERVER vars</b><br>
REMOTE_ADDR: <?=$_SERVER['REMOTE_ADDR'];?><br>
REMOTE_HOST: <?=$_SERVER['REMOTE_HOST'];?><br>
HTTP_USER_AGENT: <?=$_SERVER['HTTP_USER_AGENT'];?><br>
PHP_SELF: <?=$_SERVER['PHP_SELF'];?><br>
DOCUMENT_ROOT: <?=$_SERVER['DOCUMENT_ROOT'];?><br>
HTTP_HOST: <?=$_SERVER['HTTP_HOST'];?><br>
HTTP_REFERER: <?=$_SERVER['HTTP_REFERER'];?><br>
REQUEST_URI: <?=$_SERVER['REQUEST_URI'];?><br>
QUERY_STRING: <?=$_SERVER['QUERY_STRING'];?><br>
PATH_INFO: <?=$_SERVER['PATH_INFO'];?><br>
HTTPS: <?=$_SERVER['HTTPS'];?><br>
SERVER_PROTOCOL: <?=$_SERVER['SERVER_PROTOCOL'];?><br>
SERVER_Name: <?=$_SERVER["SERVER_NAME"];?><br>

<br>
<hr>

<?php #phpinfo(); ?>

</body>
</html>
