<?php

namespace gcgov\arcgis\sdk\Response\UpdateFeature;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class UpdateResultError extends jsonDeserialize {

	public ?int    $code        = null;
	public ?string $description = null;


	public function __construct() {
	}

}
