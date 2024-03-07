<?php

namespace gcgov\arcgis\models\road;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class geometry extends jsonDeserialize  {
	public ?string $type = '';
	public array $coordinates = [];

	public function __construct(string $type='', array $coordinates=[]) {
		$this->type = $type;
		$this->coordinates = $coordinates;
	}
}
