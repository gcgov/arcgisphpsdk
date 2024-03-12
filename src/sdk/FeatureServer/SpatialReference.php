<?php

namespace gcgov\arcgis\sdk\FeatureServer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class SpatialReference extends jsonDeserialize {
	public ?int   $latestWkid  = null;
	public ?int   $wkid        = null;


	public function __construct() {
	}

}
