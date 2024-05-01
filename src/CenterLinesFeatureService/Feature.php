<?php

namespace gcgov\arcgis\CenterLinesFeatureService;

class Feature extends \gcgov\arcgis\sdk\Feature {

	public ?FeatureProperties $properties = null;


	public function __construct() {
		parent::__construct();
		$this->properties = new FeatureProperties();
	}


	public function getProperties(): ?FeatureProperties {
		return $this->properties;
	}

	public function getObjectId(): ?int {
		return $this->properties->OBJECTID;
	}


	public function getGlobalId(): ?string {
		return $this->properties->GlobalID;
	}

}
