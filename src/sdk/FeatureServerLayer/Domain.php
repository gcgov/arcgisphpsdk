<?php

namespace gcgov\arcgis\sdk\FeatureServerLayer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class Domain extends jsonDeserialize {

	public ?string $splitPolicy = null;
	public ?string $name        = null;
	public ?string $description = null;
	public ?string $type        = null;
	public ?array  $codedValues = null;
	public ?string $mergePolicy = null;


	public function __construct() {
	}

}
