<?php

namespace gcgov\arcgis\sdk\FeatureServerLayer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class ColorRamp extends jsonDeserialize {

	public ?array $colorRamps = null;
	public ?string $type = null;

	public function __construct() {
	}

}
