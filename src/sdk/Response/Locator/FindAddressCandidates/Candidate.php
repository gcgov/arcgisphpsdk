<?php

namespace gcgov\arcgis\sdk\Response\Locator\FindAddressCandidates;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class Candidate extends jsonDeserialize {

	public string $address = '';
	public Location $location;
	public float           $score      = 0.0;
	public Attributes $attributes;
	public Extent          $extent;

	public function __construct() {
		$this->location = new Location();
		$this->extent = new Extent();
		$this->attributes = new Attributes();
	}

	public function _afterJsonDeserialize(): void {
		if(!isset($this->location)) {
			$this->location = new Location();
		}
		if(!isset($this->extent)) {
			$this->extent = new Extent();
		}
		if(!isset($this->attributes)) {
			$this->attributes = new Attributes();
		}
	}
}
