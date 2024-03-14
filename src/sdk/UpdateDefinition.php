<?php

namespace gcgov\arcgis\sdk;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class UpdateDefinition extends jsonDeserialize {

	public ?bool $success = false;
	public ?UpdateDefinitionError $error = null;


	public function __construct() {
	}

}
