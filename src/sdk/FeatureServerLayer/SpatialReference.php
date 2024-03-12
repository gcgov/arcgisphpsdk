<?php

namespace gcgov\arcgis\sdk\FeatureServerLayer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class SpatialReference extends jsonDeserialize {
	public ?float $falseM      = null;
	public ?float $xyTolerance = null;
	public ?float $mUnits      = null;
	public ?float $zUnits      = null;
	public ?int   $latestWkid  = null;
	public ?float $zTolerance  = null;
	public ?int   $wkid        = null;
	public ?float $xyUnits     = null;
	public ?float $mTolerance  = null;
	public ?float $falseX      = null;
	public ?float $falseY      = null;
	public ?float $falseZ      = null;


	public function __construct() {
	}

}
