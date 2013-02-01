<?php

$string='<monitor>
  <manufacturer>Samsung</manufacturer>
  <model>XL30</model>
  <display>
    <screen_size>30</screen_size>
    <resolution>2560x1600</resolution>
    <brightness>200</brightness>
    <contrast_ratio>1000:1</contrast_ratio>
    <response_time>6</response_time>
    <viewing_angle_h>178</viewing_angle_h>
    <viewing_angle_v>178</viewing_angle_v>
    <colour_supported>16.7</colour_supported>
    <colour_supported_metric>M</colour_supported_metric>
  </display>
</monitor>';

echo 'First Solution:=><br />';
$xml = new SimpleXMLElement($string);
pa($xml);
echo 'Second Solution:=><br />';
function xml2array($xmlObject) {
  $arr = array();
  foreach ($xmlObject as $element) {
    $tag = $element->getName();
    $e = get_object_vars($element);
    if (!empty($e)) {
      $arr[$tag] = $element instanceof SimpleXMLElement ? xml2array($element) : $e;
    }
    else {
      $arr[$tag] = trim($element);
    }
  }
  return $arr;
}
$xmlArray=xml2array($string);
pa($xmlArray);

$xml = json_decode(json_encode((array) simplexml_load_string($string)), 1);
pa($xml,1);
?>