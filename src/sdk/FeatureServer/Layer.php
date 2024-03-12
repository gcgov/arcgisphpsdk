<?php

namespace gcgov\arcgis\sdk\FeatureServer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class Layer extends jsonDeserialize {

	public ?string $name          = null;
	public ?int    $id            = null;
	public ?string $geometryType  = null;
	public ?string $serviceItemId = null;


	public function __construct() {
	}

}
