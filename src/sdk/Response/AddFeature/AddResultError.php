<?php

namespace gcgov\arcgis\sdk\Response\AddFeature;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class AddResultError extends jsonDeserialize {

	public ?int    $code        = null;
	public ?string $description = null;


	public function __construct() {
	}

}
