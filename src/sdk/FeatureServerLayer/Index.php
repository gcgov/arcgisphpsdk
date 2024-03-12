<?php

namespace gcgov\arcgis\sdk\FeatureServerLayer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class Index extends jsonDeserialize {

	public ?string $name        = null;
	public ?bool   $isUnique    = null;
	public ?string $fields      = null;
	public ?bool   $isAscending = null;


	public function __construct() {
	}

}
