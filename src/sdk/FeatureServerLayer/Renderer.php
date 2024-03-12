<?php

namespace gcgov\arcgis\sdk\FeatureServerLayer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class Renderer extends jsonDeserialize {

	public ?string        $field1           = null;
	public ?AuthoringInfo $authoringInfo    = null;
	public ?array         $uniqueValueInfos = null;
	public ?string        $type             = null;
	public ?string        $fieldDelimiter   = null;


	public function __construct() {
	}

}
