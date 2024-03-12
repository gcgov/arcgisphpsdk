<?php

namespace gcgov\arcgis\sdk\FeatureServerLayer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class Outline extends jsonDeserialize {

	public ?array $color = null;
	public ?int   $width = null;


	public function __construct() {
	}

}
