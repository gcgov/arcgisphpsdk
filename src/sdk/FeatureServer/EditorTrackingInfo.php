<?php

namespace gcgov\arcgis\sdk\FeatureServer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class EditorTrackingInfo extends jsonDeserialize {

	public ?bool $allowOthersToUpdate = null;
	public ?bool $enableEditorTracking = null;
	public ?bool $allowOthersToDelete = null;
	public ?bool $allowOthersToQuery = null;
	public ?bool $enableOwnershipAccessControl = null;


	public function __construct() {
	}

}
