<?php

namespace gcgov\arcgis\sdk\Response\AddFeature;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class AddResult extends jsonDeserialize {

	public bool            $success  = true;
	public string          $globalId = '';
	public int             $objectId = 0;
	public ?AddResultError $error    = null;


	public function __construct() {
	}

}
