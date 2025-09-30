<?php

namespace gcgov\arcgis\sdk\Response\Locator\FindAddressCandidates;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class SpatialReference extends jsonDeserialize {

	public ?int $wkid          = null;
	public ?int $latestWkid    = null;
	public ?int $vcsWkid       = null;
	public ?int $latestVcsWkid = null;


	public function __construct() {
	}

}
