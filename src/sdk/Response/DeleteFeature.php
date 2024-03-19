<?php

namespace gcgov\arcgis\sdk\Response;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class DeleteFeature extends jsonDeserialize {

	public ?ResponseError $error = null;

	/** @var ?\gcgov\arcgis\sdk\Response\DeleteFeature\DeleteResult[] $deleteResults */
	public ?array $deleteResults = null;


	public function __construct() {
	}

}
