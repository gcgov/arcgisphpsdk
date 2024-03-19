<?php

namespace gcgov\arcgis\sdk\Response;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class UpdateFeature extends jsonDeserialize {

	public ?ResponseError $error = null;

	/** @var ?\gcgov\arcgis\sdk\Response\UpdateFeature\UpdateResult[] $updateResults */
	public ?array $updateResults = null;


	public function __construct() {
	}

}
