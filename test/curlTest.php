<?php

  	$xml = file_get_contents("login.xml");//pa($xml,1);
  	//$url = 'https://108.166.72.60/api/login';
	$url = 'http://firstlumen/api/login';

	$whitespace = 1;
	$vals = array();
	$reporterrors = false;
	$parser = xml_parser_create('utf-8');
	xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
	xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, $whitespace);
	xml_parse_into_struct($parser, $xml, $vals);
	$password = $vals[2]['value'];
	$password=base64_encode($password);
	$substr1 = substr($xml,0,strpos($xml,'<password>')+10);
	$substr2 = substr($xml,strpos($xml,'</password>'));
	$substr3 = substr($xml,strpos($substr2,'</password>'));
	$xml = $substr1.$password.$substr2;
	//str_replace('<password>',
	// Error handling when the xml file is not well-formed
	if ($reporterrors) 
	{
		$errorcode = xml_get_error_code($parser);
		if ($errorcode) 
		{
			$exception = new xml_format_exception(xml_error_string($errorcode),
			xml_get_current_line_number($parser),
			xml_get_current_column_number($parser));
			xml_parser_free($parser);
			throw $exception;
		}
	}

  	$hcurl = curl_init();
    curl_setopt($hcurl, CURLOPT_URL, $url);
	curl_setopt($hcurl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($hcurl, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
	curl_setopt($hcurl, CURLOPT_POSTFIELDS, $xml);
	curl_setopt($hcurl, CURLOPT_CUSTOMREQUEST, 'POST');
	curl_setopt($hcurl, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($hcurl, CURLOPT_SSL_VERIFYHOST, 0);
	
	//curl_setopt($hcurl, CURLOPT_HTTPGET, true); - this works ok
	//curl_setopt($hcurl, CURLOPT_POST, true); - this works ok
	$out = curl_exec($hcurl);
	curl_close($hcurl);
	pa($out);
  
?>