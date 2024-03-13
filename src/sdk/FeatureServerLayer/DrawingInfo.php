<?php

namespace gcgov\arcgis\sdk\FeatureServerLayer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class DrawingInfo extends jsonDeserialize {

	public ?Renderer     $render         = null;
	public ?bool         $scaleSymbols   = null;
	public ?int          $transparency   = null;

	/** @var ?\gcgov\arcgis\sdk\FeatureServerLayer\LabelingInfo[] */
	public ?array $labelingInfo   = null;
	public ?string       $fieldDelimiter = null;


	public function __construct() {
	}

}
