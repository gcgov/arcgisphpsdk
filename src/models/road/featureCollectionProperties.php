<?php

namespace gcgov\arcgis\models\road;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class featureCollectionProperties extends jsonDeserialize {

	public ?int $count                 = 0;
	public bool $exceededTransferLimit = false;


	public function __construct( ?int $count = 0 ) {
		$this->count = $count;
	}

}
