<?php

namespace gcgov\arcgis\sdk\Response;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class ResponseError extends jsonDeserialize {

	public ?int    $code    = null;
	public ?string $message = null;


	public function __construct() {
	}

}
