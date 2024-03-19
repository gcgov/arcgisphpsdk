<?php

namespace gcgov\arcgis\sdk\Response\DeleteFeature;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class DeleteResultError extends jsonDeserialize {

	public ?int    $code        = null;
	public ?string $description = null;


	public function __construct() {
	}

}
