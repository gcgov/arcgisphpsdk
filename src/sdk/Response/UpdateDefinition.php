<?php

namespace gcgov\arcgis\sdk\Response;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class UpdateDefinition extends jsonDeserialize {

	public ?bool          $success = false;
	public ?ResponseError $error   = null;


	public function __construct() {
	}

}
