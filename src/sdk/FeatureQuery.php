<?php

namespace gcgov\arcgis\sdk;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class FeatureQuery extends jsonDeserialize {

	/** @var \gcgov\arcgis\sdk\Feature[] $features */
	public ?array                  $features   = [];
	public ?string                 $type       = '';
	public ?FeatureQueryProperties $properties = null;

}
