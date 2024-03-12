<?php

namespace gcgov\arcgis\sdk;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class Feature extends jsonDeserialize {

	public ?string                             $type     = '';
	public ?int                                $id       = null;
	public ?\gcgov\arcgis\sdk\Feature\Geometry $geometry = null;

}
