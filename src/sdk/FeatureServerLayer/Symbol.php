<?php

namespace gcgov\arcgis\sdk\FeatureServerLayer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class Symbol extends jsonDeserialize {

	public ?Outline $outline = null;
	public ?array $color = null;
	public ?int $size = null;
	public ?int $yoffset = null;
	public ?int $xoffset = null;
	public ?int $angle = null;
	public ?string $style = null;
	public ?string $type = null;
	public ?string $imageData = null;
	public ?int $width = null;
	public ?string $contentType = null;
	public ?string $url = null;
	public ?int $height = null;


	public function __construct() {
	}

}
