<?php

namespace gcgov\arcgis\sdk;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class FeatureQueryProperties extends jsonDeserialize {

	public ?int $count                 = 0;
	public bool $exceededTransferLimit = false;


}
