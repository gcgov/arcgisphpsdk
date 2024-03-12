<?php

namespace gcgov\arcgis\sdk\FeatureServerLayer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class AttachmentField extends jsonDeserialize {

	public ?bool   $nullable     = null;
	public ?bool   $editable     = null;
	public ?string $defaultValue = null;
	public ?string $domain       = null;
	public ?string $name         = null;
	public ?string $alias        = null;
	public ?string $type         = null;


	public function __construct() {
	}

}
