<?php

namespace gcgov\arcgis\sdk\FeatureServerLayer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class AdvancedEditingCapabilities extends jsonDeserialize {

	public ?bool $supportsAsyncApplyEdits = null;
	public ?array $supportedSqlFormatsInCalculate = [];


	public function __construct() {
	}

}
