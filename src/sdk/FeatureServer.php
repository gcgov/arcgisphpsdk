<?php

namespace gcgov\arcgis\sdk;

use andrewsauder\jsonDeserialize\jsonDeserialize;
use gcgov\arcgis\sdk\FeatureServer\EditorTrackingInfo;
use gcgov\arcgis\sdk\FeatureServer\Extent;
use gcgov\arcgis\sdk\FeatureServer\SpatialReference;
use gcgov\arcgis\sdk\FeatureServer\AdvancedEditingCapabilities;

class FeatureServer extends jsonDeserialize {

	public ?bool   $allowGeometryUpdates            = null;
	public ?bool   $supportsApplyEditsWithGlobalIds = null;
	public ?int    $maxRecordCount                  = null;
	public ?string $description                     = null;
	public ?string $units                           = null;
	public ?int    $maxViewsCount                   = null;
	public ?bool   $syncEnabled                     = null;
	public ?array  $tables                          = [];
	public ?bool   $hasVersionedData                = null;
	public ?bool   $hasViews                        = null;

	/** @var ?\gcgov\arcgis\sdk\FeatureServer\Layer[] */
	public ?array                       $layers                      = null;
	public ?SpatialReference            $spatialReference            = null;
	public ?Extent                      $fullExtent                  = null;
	public ?bool                        $enableZDefaults             = null;
	public ?bool                        $allowUpdateWithoutMValues   = null;
	public ?bool                        $isLocationTrackingService   = null;
	public ?string                      $supportedExportFormats      = null;
	public ?string                      $capabilities                = null;
	public ?bool                        $supportsAppend              = null;
	public ?bool                        $supportsDisconnectedEditing = null;
	public ?bool                        $supportedAppendFormats      = null;
	public ?bool                        $supportsReturnDeleteResults = null;
	public ?string                      $currentVersion              = null;
	public ?AdvancedEditingCapabilities $advancedEditingCapabilities = null;
	public ?string                      $supportedQueryFormats       = null;
	public ?Extent                      $initialExtent               = null;
	public ?string                      $serviceDescription          = null;
	public ?EditorTrackingInfo          $editorTrackingInfo          = null;
	public ?bool                        $hasSyncEnabledViews         = null;
	public ?string                      $copyrightText               = null;
	public ?int                         $zDefault                    = null;
	public ?string                      $serviceItemId               = null;


	public function __construct() {
	}

}
