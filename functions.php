<?php
// for the news - PHP5 only
date_default_timezone_set('America/Chicago');

// name of lyrics folder here
$lyrpath="lyrics";

// define lyrics function here
function do_lyrics($filename,$songname=NULL) {
	global $lyrpath;

	if (check_mobile()==true) {
		echo "<a href=\"$lyrpath/$filename.php\"><span class=\"fas fa-file-alt\"></span></a>\n";
	} else {
		echo "<a href=\"$lyrpath/$filename.php\" class=\"lyriclink\" aria-haspopup=\"dialog\"><span class=\"fas fa-file-alt\"></span><span class=\"wai\">view $songname lyrics</span></a>\n";
	}
}


// define video function here
function do_video($videoname,$songtitle=NULL,$ico=NULL) {
	// assuming embed size width="480" height="360"

	$songtitle = stripslashes($songtitle);

	if ($ico) {
		$linkname = "<span class=\"fas fa-video\"></span><span class=\"wai\">watch $songtitle video</span>";
	} else {
		$linkname = "<span class=\"wai\">watch </span>$songtitle<span class=\"wai\"> video</span>";
	}

	if ( (check_mobile()==true) ) {
		echo "<a href=\"viewvideo.php?yt=".$videoname."\" title=\"".stripslashes($songtitle)."\">".$linkname."</a>\n";
	} else {
		echo "<a href=\"viewvideo.php?yt=".$videoname."\" class=\"videolink\" aria-haspopup=\"dialog\">".$linkname."</a>\n";
	}
}


function do_mp3bc2($samplename,$songtitle=NULL,$ico=NULL) {
	$songtitle = stripslashes($songtitle);

	if ($ico) {
		$linkname = "<span class=\"fas fa-music\"></span><span class=\"wai\">listen to $songtitle music sample</span>";
	} else {
		$linkname = "<span class=\"wai\">listen to </span>$songtitle<span class=\"wai\"> music sample</span>";
	}

	if ( (check_mobile()==true) ) {
		echo "<a href=\"viewmp3bc.php?bcsample=".$samplename."\" title=\"".stripslashes($songtitle)."\">".$linkname."</a>\n";
	} else {
		echo "<a href=\"viewmp3bc.php?bcsample=".$samplename."\" class=\"musiclink\" aria-haspopup=\"dialog\">".$linkname."</a>\n";
	}
}


// new table output structure for rows in discogs
function do_songtitle($tracknum,$songname,$lyricsfile,$mp3name,$mp3cover,$videoname,$videotitle=NULL) {
	echo "<tr itemprop=\"track\" itemscope itemtype=\"http://schema.org/MusicRecording\">
	<th scope=\"row\" class=\"tracknum\"><span itemprop=\"position\">$tracknum</span></th>
	<td itemprop=\"name\">".stripslashes($songname)."</td>
	<td>";

	if ($lyricsfile) {
		do_lyrics("$lyricsfile","$songname");
	} else {echo "";}

	echo "</td>
	<td>";

	if (($mp3name != NULL) && (strstr($mp3name, "-bc"))) {
		$mp3name = str_replace("-bc", "", $mp3name);
		do_mp3bc2("$mp3name","$songname",1);
	} else {echo "";}

	echo "</td>
	<td>";

	if ($videoname) {
		do_video("$videoname","$videotitle",1);
	} else {echo "";}

	echo "</td>
	</tr>";
}


// check for mobile device
function check_mobile() {
	// from http://detectmobilebrowsers.com
	$useragent=$_SERVER['HTTP_USER_AGENT'];
	if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
	{ return true; }
}

// page headers
function get_header() {
	global $int;
	include_once("headers/header.php");
}

// output OG tags
function BuildFBOG($fields) {
	// common OG fields
	echo '<meta property="og:site_name" content="the Machine in the Garden">';
	echo '<meta property="og:locale" content="en_US">';
	// variable OG fields
	foreach ($fields as $key => $value) {
		echo '<meta property="'.$key.'" content="'.$value.'">';
	}
	// common OG fields
	# R old = 1120445561
	# R new = 10204387203776427
	# S old = 713632115
	# S new = 10152332016342116
	echo '<meta property="article:publisher" content="https://www.facebook.com/tmitg" />';
	echo '<meta property="fb:app_id" content="145634995501895">';
	echo '<meta property="fb:admins" content="1120445561,713632115">';
	echo '<meta name="twitter:card" content="summary"/>';
	echo '<meta name="twitter:site" content="@tmitg"/>';
	echo '<meta name="twitter:creator" content="@tmitg"/>';
}


?>
