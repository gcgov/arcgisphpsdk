<?php

namespace gcgov\arcgis\sdk;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class UpdateFeature extends jsonDeserialize {

	public ?\gcgov\arcgis\sdk\UpdateFeature\Geometry $geometry = null;
	public ?\gcgov\arcgis\sdk\FeatureProperties $attributes = null;

	public function __construct() {
	}

	public static function fromFeature( Feature $feature ): self {
		$UpdateFeature = new UpdateFeature();
		$UpdateFeature->geometry = \gcgov\arcgis\sdk\UpdateFeature\Geometry::fromFeatureGeometry( $feature->getGeometry() );
		$UpdateFeature->attributes = $feature->getProperties();
		return $UpdateFeature;
	}

	public function _afterJsonSerialize( array $export ): array {
		if(!isset($this->geometry) || !isset($this->geometry->x) ) {
			unset($export['geometry']);
		}

		return $export;
	}

}
