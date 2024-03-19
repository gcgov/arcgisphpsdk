<?php

namespace gcgov\arcgis\sdk\Response\UpdateFeature;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class UpdateResult extends jsonDeserialize {

	public bool               $success  = true;
	public string             $globalId = '';
	public int                $objectId = 0;
	public ?UpdateResultError $error    = null;


	public function __construct() {
	}

}
