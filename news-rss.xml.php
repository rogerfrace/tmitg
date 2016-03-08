<?php

// global variables
# directory where newsitems live
$newsdir = "newsitems";
//

header('Content-Type: text/xml');
print '<?xml version="1.0" encoding="US-ASCII"?>
	<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
	
	<channel>
	<title>the Machine in the Garden - news</title>
	<description>Current tMitG News</description>
	<link>http://www.tmitg.com/news.php</link>
	<language>en-us</language>
	<managingEditor>tmitg@tmitg.com (the Machine in the Garden)</managingEditor>
	<webMaster>tmitg@tmitg.com (the Machine in the Garden)</webMaster>
	<copyright>Copyright 2002 - '.date("Y",time()).', the Machine in the Garden</copyright>
	<atom:link href="http://www.tmitg.com/news-rss.xml.php" rel="self" type="application/rss+xml" />';



// open this directory 
$myDirectory = opendir($newsdir);

// get each entry
while($entryName = readdir($myDirectory)) {
	$dirArray[] = $entryName;
}

// close directory
closedir($myDirectory);

// count files
$indexCount = count($dirArray);

// reverse sort
rsort($dirArray);

// set last build date to date of most recent entry
include($newsdir.'/'.$dirArray[0]);
print '<lastBuildDate>'.$pubdate.'</lastBuildDate>';

// loop through the array of files and print them all
for($index=0; $index < $indexCount; $index++) {
	if (substr("$dirArray[$index]", 0, 1) != ".") { // don't list hidden files
		#print $dirArray[$index];
		// reset read-in variables
		unset($pubdate);
		unset($title);
		unset($description);
		
		// get file contents
		include($newsdir.'/'.$dirArray[$index]);
		
		// strip .php to make an id number
		$idnum = str_replace(".php","",$dirArray[$index]);
		// output <item>
		print '<item>';
		print '<guid>http://www.tmitg.com/item'.$idnum.'</guid>';
		print '<pubDate>'.$pubdate.'</pubDate>';
		print '<title>'.htmlentities($title).'</title>';
		print '<link>http://www.tmitg.com/news.php?item='.$idnum.'</link>';
		print '<description>'.htmlentities($description).'</description>';
		print '</item>';
	}
}




print '</channel></rss>';
?>
