<?php

namespace gcgov\arcgis\sdk\FeatureServerLayer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class Template extends jsonDeserialize {

	public ?string $name = null;
	public ?string $description = null;
	public ?string $drawingTool = null;
	public ?AttributePrototype $prototype = null;

	public function __construct() {
	}

}
