<?php

namespace gcgov\arcgis\sdk\FeatureServerLayer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class LabelExpressionInfo extends jsonDeserialize {

	public ?string $expression = null;
	public ?string $title = null;

	public function __construct() {
	}

}
