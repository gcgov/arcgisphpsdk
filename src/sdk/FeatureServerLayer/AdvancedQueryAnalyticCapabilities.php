<?php

namespace gcgov\arcgis\sdk\FeatureServerLayer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class AdvancedQueryAnalyticCapabilities extends jsonDeserialize {

	public ?bool $supportsAsync = null;
	public ?bool $supportsLinearRegression = null;
	public ?bool $supportsPercentileAnalytic = null;


	public function __construct() {
	}

}
