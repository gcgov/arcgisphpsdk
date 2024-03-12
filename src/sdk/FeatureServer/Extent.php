<?php

namespace gcgov\arcgis\sdk\FeatureServer;

use andrewsauder\jsonDeserialize\jsonDeserialize;
use gcgov\arcgis\sdk\FeatureServer\SpatialReference;

class Extent extends jsonDeserialize {

	public ?float            $ymin             = null;
	public ?float            $xmin             = null;
	public ?float            $ymax             = null;
	public ?float            $xmax             = null;
	public ?SpatialReference $spatialReference = null;


	public function __construct() {
	}

}
