<?php

namespace gcgov\arcgis\sdk\Response\AddDefinition;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class DomainMap extends jsonDeserialize {

	public ?string            $createdDomainName  = '';
	public ?string          $originalDomainName = '';

	public function __construct() {
	}

}
