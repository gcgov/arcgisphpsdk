<?php

namespace gcgov\arcgis\sdk\Response\Locator\FindAddressCandidates;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class Extent extends jsonDeserialize {
	public ?float $xmin = null;
	public ?float $ymin = null;
	public ?float $xmax = null;
	public ?float $ymax = null;

}
