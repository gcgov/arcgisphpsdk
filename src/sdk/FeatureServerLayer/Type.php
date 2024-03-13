<?php

namespace gcgov\arcgis\sdk\FeatureServerLayer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class Type extends jsonDeserialize {

	/** @var \gcgov\arcgis\sdk\FeatureServerLayer\Template[] $templates */
	public ?array $templates = null;

	public ?string $name = null;

	/** @var array<string, \gcgov\arcgis\sdk\FeatureServerLayer\Domain> $domains */
	public ?array $domains = [];

	public ?int   $id      = null;


	public function __construct() {
	}

}
