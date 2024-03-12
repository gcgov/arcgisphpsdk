<?php

namespace gcgov\arcgis\sdk\FeatureServerLayer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class Extent extends jsonDeserialize {

	public ?float            $ymin             = null;
	public ?float            $xmin             = null;
	public ?float            $ymax             = null;
	public ?float            $xmax             = null;
	public ?SpatialReference $spatialReference = null;


	public function __construct() {
	}

}
