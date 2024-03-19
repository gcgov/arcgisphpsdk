<?php

namespace gcgov\arcgis\sdk\Response;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class AddDefinition extends jsonDeserialize {

	public ?bool          $success = false;
	public ?ResponseError $error   = null;

	/** @var \gcgov\arcgis\sdk\Response\AddDefinition\DomainMap[] $domainMap */
	public ?array $domainMap   = [];


	public function __construct() {
	}

}
