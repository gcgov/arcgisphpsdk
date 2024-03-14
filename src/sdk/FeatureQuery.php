<?php

namespace gcgov\arcgis\sdk;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class FeatureQuery extends jsonDeserialize {

	/** @var \gcgov\arcgis\sdk\Feature[] $features */
	public ?array                  $features              = [];
	public ?string                 $type                  = '';
	public ?bool                   $exceededTransferLimit = null;
	public ?FeatureQueryProperties $properties            = null;

}
