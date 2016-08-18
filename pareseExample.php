<?php
	$nexUrl = 'https://graph.facebook.com/xxxxxx/feed?limit=400&until=1353532418';
$parseURL = parse_url($nexUrl);
echo "<pre>";
print_r($parseURL);
parse_str($parseURL['query']);
echo 'limit='. $limit .'<br/> until='.$until;

?>