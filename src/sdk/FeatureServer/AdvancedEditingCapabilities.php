<?php

namespace gcgov\arcgis\sdk\FeatureServer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class AdvancedEditingCapabilities extends jsonDeserialize {

	public ?bool $supportsAsyncApplyEdits = null;


	public function __construct() {
	}

}
