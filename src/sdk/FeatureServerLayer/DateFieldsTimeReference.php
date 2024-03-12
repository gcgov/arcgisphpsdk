<?php

namespace gcgov\arcgis\sdk\FeatureServerLayer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class DateFieldsTimeReference extends jsonDeserialize {

	public ?bool   $respectsDaylightSaving = null;
	public ?string $timeZone = null;


	public function __construct() {
	}

}
