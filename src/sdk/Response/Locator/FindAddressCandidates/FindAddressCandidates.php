<?php

namespace gcgov\arcgis\sdk\Response\Locator\FindAddressCandidates;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class FindAddressCandidates extends jsonDeserialize {


	public SpatialReference $spatialReference;

	/** @var \gcgov\arcgis\sdk\Response\Locator\FindAddressCandidates\Candidate[] $candidates */
	public array $candidates = [];

	public function __construct() {
		$this->spatialReference = new SpatialReference();
	}

}
