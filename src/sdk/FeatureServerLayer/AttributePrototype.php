<?php

namespace gcgov\arcgis\sdk\FeatureServerLayer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class AttributePrototype extends jsonDeserialize {

	/** @var array<string, int|string> */
	public ?array $attributes = [];


	public function __construct() {
	}

}
