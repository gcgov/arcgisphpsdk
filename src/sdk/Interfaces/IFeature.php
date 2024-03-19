<?php

namespace gcgov\arcgis\sdk\Interfaces;

interface IFeature {

	public function getGeometry(): ?\gcgov\arcgis\sdk\Feature\Geometry;


	public function getProperties(): ?\gcgov\arcgis\sdk\FeatureProperties;


	public function getObjectId(): ?int;


	public function getGlobalId(): ?string;

}
