<?php

	/* Any IP Address or Website Name */
	/**********************************/
	$query 	= $_SERVER['REMOTE_ADDR'];

	/*  Your API Details  */
	/**********************/
	$api_id = "id75822";
	$api_url = "https://api.myip.ms";
	
	/*  Whois Result  */
	/******************/
   	$url  = create_api_url($query, $api_id, $api_key, $api_url);
	$ch = curl_init( $url );
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt( $ch, CURLOPT_HEADER, 0);
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt( $ch, CURLOPT_TIMEOUT, 90);
	curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 90);
	$data = curl_exec($ch);
	curl_close($ch);
   	$arr  = json_decode($data, true);

	/*  Examples  */
	/******************/
	//  Example1 - Display IP Address Owner/s
/*	if (isset($arr["status"]) && $arr["status"] == "error") {
		echo "Error! ".(isset($arr["error_desc"])?$arr["error_desc"]:"");
	}
	else {
		if (isset($arr["owners"]["owner"]["ownerName"])) echo "Owner: ".$arr["owners"]["owner"]["ownerName"]."<br>Address: ".$arr["owners"]["owner"]["address"]."<br>Country: ".$arr["owners"]["owner"]["countryName"]."<br>Owner Range: ".$arr["owners"]["owner"]["range"]."<br>";
		if (isset($arr["owners"]["parent_owner"]["ownerName"])) echo "Parent Owner: ".$arr["owners"]["parent_owner"]["ownerName"]."<br>Address: ".$arr["owners"]["parent_owner"]["address"]."<br>Country: ".$arr["owners"]["parent_owner"]["countryName"]."<br>Owner Range: ".$arr["owners"]["parent_owner"]["range"]."<br>";
		if (isset($arr["owners"]["top_parent_owner"]["ownerName"])) echo "Top Parent Owner: ".$arr["owners"]["top_parent_owner"]["ownerName"]."<br>Address: ".$arr["owners"]["top_parent_owner"]["address"]."<br>Country: ".$arr["owners"]["top_parent_owner"]["countryName"]."<br>Owner Range: ".$arr["owners"]["top_parent_owner"]["range"]."<br>";
	}*/
	//  Example2 - All Whois Data
	//echo "<pre>"; print_r($arr); echo "</pre>";
	
	
function create_api_url($query, $api_id, $api_key, $api_url, $timestamp = '')
{
	$url = "";
	if (!$timestamp) $timestamp = gmdate("Y-m-d_H:i:s");
	if (trim($query) != '') {
		$url = $api_url."/".$query.'/api_id/'.$api_id.'/api_key/'.$api_key;  
		$signature = md5($url.'/timestamp/'.$timestamp);
		$url .= '/signature/'.$signature.'/timestamp/'.$timestamp;
	}
	return $url;
}

?>
