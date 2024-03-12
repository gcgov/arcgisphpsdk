<?php

namespace gcgov\arcgis\sdk\FeatureServerLayer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class LabelingInfo extends jsonDeserialize {

	public ?Symbol              $symbol                = null;
	public ?bool                $stackLabel            = null;
	public ?int                 $stackRowLength        = null;
	public ?int                 $maxScale              = null;
	public ?LabelExpressionInfo $labelExpressionInfo   = null;
	public ?string              $deconflictionStrategy = null;
	public ?int                 $priority              = null;
	public ?string              $labelPlacement        = null;
	public ?string              $removeDuplicates      = null;
	public ?string              $name                  = null;
	public ?int                 $minScale              = null;
	public ?string              $stackAlignment        = null;
	public ?bool                $useCodedValues        = null;


	public function __construct() {
	}

}
