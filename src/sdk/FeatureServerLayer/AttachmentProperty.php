<?php

namespace gcgov\arcgis\sdk\FeatureServerLayer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class AttachmentProperty extends jsonDeserialize {

	public ?string $fieldName = null;
	public ?bool   $isEnabled = null;
	public ?string $name      = null;


	public function __construct() {
	}

}
