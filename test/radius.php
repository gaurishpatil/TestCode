<?php
public function distance($zipOne,$zipTwo) {

	if(isset($this->distanceCache[$zipOne][$zipTwo])) {
	return $this->distanceCache[$zipOne][$zipTwo];
	} else if(isset($this->distanceCache[$zipTwo][$zipOne])) {
	return $this->distanceCache[$zipTwo][$zipOne];
	}

	$s = microtime(true);
	$zipOne = $this->cleanZip($zipOne);
	if(!isset($this->zipCache[$zipOne])) {
	$first = new lendingstat_row(null,'zipcodes');
	$first->id = $zipOne;
	if(!$first->fetchIfExists()) {
	throw new Activa_Exception("First Zip Code not found");
	}
	$this->zipCache[$zipOne] = $first;
	} else {
	$first = $this->zipCache[$zipOne];
	}

	$s = microtime(true);
	$zipTwo = $this->cleanZip($zipTwo);
	if(!isset($this->zipCache[$zipTwo])) {
	$second = new lendingstat_row(null,'zipcodes');
	$second->id = $zipTwo;
	if(!$second->fetchIfExists()) {
	throw new Activa_Exception("Second Zip Code not found");
	}
	$this->zipCache[$zipTwo] = $second;
	} else {
	$second = $this->zipCache[$zipTwo];
	}

	$s = microtime(true);
	/* Convert all the degrees to radians */
	$lat1 = $this->deg_to_rad($first->lat);
	$lon1 = $this->deg_to_rad($first->long);
	$lat2 = $this->deg_to_rad($second->lat);
	$lon2 = $this->deg_to_rad($second->long);

	/* Find the deltas */
	$delta_lat = $lat2 - $lat1;
	$delta_lon = $lon2 - $lon1;

	/* Find the Great Circle distance */
	$temp = pow(sin($delta_lat/2.0),2) + cos($lat1) * cos($lat2) * pow(sin($delta_lon/2.0),2);

	$EARTH_RADIUS = 3956;
	$distance = $EARTH_RADIUS * 2 * atan2(sqrt($temp),sqrt(1-$temp));

	$this->distanceCache[$zipOne][$zipTwo] = $distance;

	return $distance;
}


?>