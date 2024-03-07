<?php

namespace gcgov\arcgis\models;

use andrewsauder\jsonDeserialize\jsonDeserialize;
use gcgov\arcgis\models\road\geometry;
use gcgov\arcgis\models\road\featureProperties;

class road  extends jsonDeserialize {
	public ?string $type = '';
	public ?int $id = null;
	public ?geometry          $geometry   = null;
	public ?featureProperties $properties = null;

	public function __construct(?string $type=null, ?int $id=null, ?geometry $geometry=null, ?featureProperties $properties=null) {
		$this->type = $type;
		$this->id = $id;
		$this->geometry = $geometry;
		$this->properties = $properties;
	}
}
