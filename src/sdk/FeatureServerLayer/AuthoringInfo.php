<?php

namespace gcgov\arcgis\sdk\FeatureServerLayer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class AuthoringInfo extends jsonDeserialize {

	public ?ColorRamp $colorRamp = null;


	public function __construct() {
	}

}
