<?php

namespace gcgov\arcgis\BridgesCulvertsFeatureService;

class Feature extends \gcgov\arcgis\sdk\Feature {

	public ?FeatureProperties $properties = null;


	public function __construct() {
		parent::__construct();
		$this->properties = new FeatureProperties();
	}


	public function getProperties(): ?FeatureProperties {
		return $this->properties;
	}

}
