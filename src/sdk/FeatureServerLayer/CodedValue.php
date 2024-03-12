<?php

namespace gcgov\arcgis\sdk\FeatureServerLayer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class CodedValue extends jsonDeserialize {

	public ?string $code = null;
	public ?string $name = null;


	public function __construct() {
	}

}
