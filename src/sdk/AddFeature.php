<?php

namespace gcgov\arcgis\sdk;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class AddFeature extends jsonDeserialize {

	public ?\gcgov\arcgis\sdk\AddFeature\Geometry $geometry = null;
	public ?\gcgov\arcgis\sdk\FeatureProperties $attributes = null;

	public function __construct() {
	}

	public static function fromFeature( Feature $feature ): self {
		$AddFeature = new AddFeature();
		$AddFeature->geometry = \gcgov\arcgis\sdk\AddFeature\Geometry::fromFeatureGeometry( $feature->getGeometry() );
		$AddFeature->attributes = $feature->getProperties();
		return $AddFeature;
	}

	public function _afterJsonSerialize( array $export ): array {
		if(!isset($this->geometry) || !isset($this->geometry->x) ) {
			unset($export['geometry']);
		}
		return $export;
	}

}
