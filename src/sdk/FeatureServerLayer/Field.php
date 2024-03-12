<?php

namespace gcgov\arcgis\sdk\FeatureServerLayer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class Field extends jsonDeserialize {

	public ?bool $nullable = null;
	public ?string $defaultValue = null;
	public ?bool $editable = null;
	public ?int $length = null;
	public ?string $type = null;
	public ?string $modelName = null;
	public ?Domain $domain = null;
	public ?string $name = null;
	public ?string $alias = null;

	public function __construct() {
	}

}
