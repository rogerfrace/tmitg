<?php header("Content-type: text/css"); ?>

body {
	padding:0;
	margin:0;
	min-height: 615px;
	height: 100%;
	background-color: #000;
	/*background-image: url("headers/images/home/baats-s1.jpg");*/
	background-attachment: fixed;
	background-position: 100% 100%;
	background-repeat: no-repeat;
	-moz-background-size: 38%;
	-webkit-background-size: 38%;
	-o-background-size: 38%;
	background-size: 38%;
}
.ie678 body {
	background-image: none;
}
#bkgrnd {
	display: none;
}
.ie678 #bkgrnd {
	display: block;
	z-index: 1;
	position: absolute;
	bottom: 0;
	right: 0;
	height: 60%;
}
.ie678 #bkgrnd img {
	position: relative;
	zoom: 1;
	z-index: 1;
	height: 100%;
}
nav {
	z-index:200;
	position:fixed;
	top:25px;
	left:0;
}
.ie6 nav {
	position: absolute;
	top: 45px;
}
nav ul {
	margin:0;
	padding:0;
	list-style-type: none;
}
nav li a,
nav li a:link,
nav li a:visited {
	display:block;
	text-decoration:none;
	color: white;
	font-weight: normal;
	margin: 1em 0;
	padding: 1em;
	background-color: rgba(110,147,182,0.25);
	text-align:right;
	vertical-align:top;
	width: 100px;
	-webkit-transition: all 250ms ease;
	-moz-transition: all 250ms ease;
	-o-transition: all 250ms ease;
	transition: all 250ms ease;
	-webkit-border-top-right-radius: .25em;
	-webkit-border-bottom-right-radius: .25em;
	-moz-border-radius-topright: .25em;
	-moz-border-radius-bottomright: .25em;
	border-top-right-radius: .25em;
	border-bottom-right-radius: .25em;
}
.ie678 nav li a {
	background-color: #526e88;
	filter: alpha(opacity = 50);
}

nav li a:hover {
	background-color: rgba(110,147,182,0.75);
	width:150px;
	font-weight: bold;
	-webkit-transition: all 250ms ease;
	-moz-transition: all 250ms ease;
	-o-transition: all 250ms ease;
	transition: all 250ms ease;
	-webkit-border-top-right-radius: .75em;
	-webkit-border-bottom-right-radius: .75em;
	-moz-border-radius-topright: .75em;
	-moz-border-radius-bottomright: .75em;
	border-top-right-radius: .75em;
	border-bottom-right-radius: .75em;
}
.ie678 nav li a:hover {
	filter: alpha(opacity = 90);
	color: #ffffff;
}

main {
	z-index:30;
	width: 100%;
	position:relative;
	margin-top: 25px;
}
.ie6 main {
	position: absolute;
}
section {
	z-index: 40;
	position: static;
	display:block;
	padding: 0 1em 1em;
	margin: 20px 50px 0 200px;
	background-color: rgba(110,147,182,0.66);
	border: 5px solid rgb(110,147,182);
	-webkit-border-radius: 3em;
	-moz-border-radius: 3em;
	border-radius: 3em;
}
.ie678 section {
	background-color: #486178;
	filter: alpha(opacity = 90); zoom:1;
	color: #ffffff;
}


/* old css overrides */
#front #titlebar {
	position: relative;
	z-index: 5;
	background-color: transparent;
	width: auto;
}
.ie678 #front #titlebar {
	margin-top: 20px;
}
#front #titlebar h1 {
	text-align: left;
	width: auto;
	margin: 0;
	padding: 0 0 0 219px;
}
#front h1 .title {
	display: block;
	font-family: 'Jacques Francois', Georgia, serif;
	font-weight: normal;
	font-variant: small-caps;
	font-size: 52px;
	color: #ffffff;
	text-shadow:2px 2px 3px rgb(110,147,182);
	filter: dropshadow(color=#486178, offx=2, offy=2);
}
#front h1 .subtitle {
	display: block;
	font-family: 'Piedra', Arial, sans-serif;
	font-weight: normal;
	font-size: 18px;
	letter-spacing: 1px;
	color: #aaaaaa;
	text-transform: none;
	text-align: right;
	margin-right: 25%;
}

#front h2 {
	font-family: 'Piedra', Arial, sans-serif;
	font-weight: normal;
	font-size: 24px;
	letter-spacing: 1px;
	color: #ffffff;
	font-variant: small-caps;
	text-shadow:2px 2px 3px rgb(110,147,182);
	filter: dropshadow(color=#486178, offx=2, offy=2);
}
p, p a:link, p a:visited, p a:hover {
	color: white;
}

/* mobile overrides */
@media screen and (min-width: 1200px) {
	#front h1 .subtitle {margin-right:20px; margin-left:550px; text-align:left;}
}
@media screen and (max-width: 930px) {
	#front h1 .title {font-size:40px;}
}
@media screen and (max-width: 767px) {
	#front h1 .title {font-size:35px;}
}
@media screen and (max-width: 560px) {
	#front h1 .title {font-size:25px;}
}
@media screen and (max-width: 425px) {
	#front h1 .title {font-size:17px;}
	#front h1 .subtitle {font-size:15px;}
}

@import url("tmitg-mobile.css");

@media (max-width: 725px) {
	#front #titlebar h1 {padding-left:70px;}
	#front section {margin-left:50px;}
}
