<?php

namespace gcgov\arcgis\sdk\Feature;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class Geometry extends jsonDeserialize {

	public ?string $type = '';

	public array $coordinates = [];


	public function __construct( string $type = '', array $coordinates = [] ) {
		$this->type        = $type;
		$this->coordinates = $coordinates;
	}

}
