<?php

namespace gcgov\arcgis\sdk\Response;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class AddFeature extends jsonDeserialize {

	public ?ResponseError $error = null;

	/** @var ?\gcgov\arcgis\sdk\Response\AddFeature\AddResult[] $addResults */
	public ?array $addResults = null;


	public function __construct() {
	}

}
