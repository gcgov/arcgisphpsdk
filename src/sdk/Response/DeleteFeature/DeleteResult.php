<?php

namespace gcgov\arcgis\sdk\Response\DeleteFeature;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class DeleteResult extends jsonDeserialize {

	public bool               $success  = true;
	public string             $globalId = '';
	public int                $objectId = 0;
	public ?DeleteResultError $error    = null;


	public function __construct() {
	}

}
