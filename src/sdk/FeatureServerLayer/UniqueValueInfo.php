<?php

namespace gcgov\arcgis\sdk\FeatureServerLayer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class UniqueValueInfo extends jsonDeserialize {

	public ?Symbol $symbol = null;
	public ?string $label  = null;
	public ?string $value  = null;


	public function __construct() {
	}

}
