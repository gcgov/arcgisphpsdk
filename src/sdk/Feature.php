<?php

namespace gcgov\arcgis\sdk;

use andrewsauder\jsonDeserialize\jsonDeserialize;
use gcgov\arcgis\sdk\Interfaces\IFeature;

abstract class Feature extends jsonDeserialize implements IFeature {

	public ?string                             $type     = 'Feature';
	public ?int                                $id       = null;
	public ?\gcgov\arcgis\sdk\Feature\Geometry $geometry = null;

	public function __construct() {
		$this->geometry = new \gcgov\arcgis\sdk\Feature\Geometry('Point');
	}

	public function getGeometry(): ?\gcgov\arcgis\sdk\Feature\Geometry {
		return $this->geometry;
	}

}
