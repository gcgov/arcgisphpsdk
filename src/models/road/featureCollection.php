<?php

namespace gcgov\arcgis\models\road;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class featureCollection extends jsonDeserialize {

	public ?string $type = '';

	/** @var \gcgov\arcgis\models\road[] $features */
	public array $features = [];

	public ?featureCollectionProperties $properties = null;


	public bool $exceededTransferLimit = false;

	public function __construct( ?string $type = null, array $features = [] ) {
		$this->type = $type;
	}

}
