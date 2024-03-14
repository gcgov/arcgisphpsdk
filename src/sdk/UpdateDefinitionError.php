<?php

namespace gcgov\arcgis\sdk;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class UpdateDefinitionError extends jsonDeserialize {

	public ?int $code = null;
	public ?string $message = null;


	public function __construct() {
	}

}
