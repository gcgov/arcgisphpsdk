<?php

namespace gcgov\arcgis\sdk\AddFeature;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class Geometry extends jsonDeserialize {

	public ?float $x = null;
	public ?float $y = null;
	public array  $spatialReference = [ "wkid" => 4326 ];

	public function __construct() {
	}

	public static function fromFeatureGeometry(?\gcgov\arcgis\sdk\Feature\Geometry $geometry=null): self {
		$updateGeometry = new Geometry();
		if( isset( $geometry?->coordinates[ 0 ] ) ) {
			$updateGeometry->x = $geometry?->coordinates[ 0 ];
		}
		if( isset( $geometry?->coordinates[ 1 ] ) ) {
			$updateGeometry->y = $geometry?->coordinates[ 1 ];
		}
		return $updateGeometry;
	}

}
