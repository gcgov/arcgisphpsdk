<?php

namespace gcgov\arcgis\sdk\Response\Locator\FindAddressCandidates;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class Location extends jsonDeserialize {
	public ?float $x = null;
	public ?float $y = null;
	public ?float $z = null;

}
