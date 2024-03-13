<?php

namespace gcgov\arcgis\sdk;

use andrewsauder\jsonDeserialize\jsonDeserialize;
use gcgov\arcgis\sdk\FeatureServerLayer\AdvancedEditingCapabilities;
use gcgov\arcgis\sdk\FeatureServerLayer\AdvancedQueryAnalyticCapabilities;
use gcgov\arcgis\sdk\FeatureServerLayer\AdvancedQueryCapabilities;
use gcgov\arcgis\sdk\FeatureServerLayer\DateFieldsTimeReference;
use gcgov\arcgis\sdk\FeatureServerLayer\DrawingInfo;
use gcgov\arcgis\sdk\FeatureServerLayer\Extent;
use gcgov\arcgis\sdk\FeatureServerLayer\GeometryField;

class FeatureServerLayer extends jsonDeserialize {

	public ?bool   $isCoGoEnabled                   = null;
	public ?Extent $extent                          = null;
	public ?bool   $isDataBranchVersioned           = null;
	public ?bool   $supportsApplyEditsWithGlobalIds = null;
	public ?int    $maxRecordCount                  = null;

	/** @var ?\gcgov\arcgis\sdk\FeatureServerLayer\AttachmentProperty[] $attachmentProperties */
	public ?array $attachmentProperties = [];

	/** @var ?\gcgov\arcgis\sdk\FeatureServerLayer\AttachmentField[] $attachmentFields */
	public ?array $attachmentFields = [];

	/** @var ?string[] $infoInEstimates */
	public ?array $infoInEstimates = [];

	public ?bool                        $datesInUnknownTimezone                      = null;
	public ?string                      $type                                        = null;
	public ?bool                        $onlyAllowTrueCurveUpdatesByTrueCurveClients = null;
	public ?bool                        $supportsAttachmentsByUploadId               = null;
	public ?array                       $relationships                               = [];
	public ?bool                        $supportsAttachmentsResizing                 = null;
	public ?string                      $cimVersion                                  = null;
	public ?bool                        $isDataArchived                              = null;
	public ?int                         $id                                          = null;
	public ?bool                        $supportsStatistics                          = null;
	public ?string                      $supportedExportFormats                      = null;
	public ?int                         $standardMaxRecordCount                      = null;
	public ?bool                        $isDataVersioned                             = null;
	public ?array                       $templates                                   = [];
	public ?bool                        $hasGeometryProperties                       = null;
	public ?bool                        $supportsAdvancedQueries                     = null;
	public                              $parentLayer                                 = null;
	public ?float                       $currentVersion                              = null;
	public ?bool                        $canScaleSymbols                             = null;
	public ?bool                        $hasZ                                        = null;
	public ?AdvancedEditingCapabilities $advancedEditingCapabilities                 = null;
	public ?string                      $objectIdField                               = null;
	public ?bool                        $supportsQuantizationEditMode                = null;
	public ?string                      $name                                        = null;
	public ?bool                        $allowTrueCurvesUpdates                      = null;
	public ?string                      $displayField                                = null;
	public ?bool                        $supportsCalculate                           = null;
	/** @var ?\gcgov\arcgis\sdk\FeatureServerLayer\Field[] $fields */
	public ?array $fields = [];

	public ?bool                    $maxRecordCountFactor             = null;
	public ?DateFieldsTimeReference $dateFieldsTimeReference          = null;
	public ?bool                    $supportsFieldDescriptionProperty = null;
	public ?bool                    $hasM                             = null;
	public ?bool                    $allowGeometryUpdates             = null;
	public ?bool                    $useStandardizedQueries           = null;
	public ?string                  $globalIdField                    = null;
	public ?string                  $description                      = null;
	public ?bool                    $syncCanReturnChanges             = null;
	public ?bool                    $supportsAsyncDelete              = null;

	/** @var ?string[] $supportedSpatialRelationships */
	public ?array $supportedSpatialRelationships      = [];
	public ?bool  $supportsRollbackOnFailureParameter = null;
	public ?bool  $isDataReplicaTracked               = null;
	public ?int   $standardMaxRecordCountNoGeometry   = null;
	/** @var ?\gcgov\arcgis\sdk\FeatureServerLayer\Index[] $indexes */
	public ?array $indexes = [];

	public                            $editFieldsInfo                  = null;
	public ?string                    $htmlPopupType                   = null;
	public ?float                     $minScale                        = null;
	public ?bool                      $hasAttachments                  = null;
	public ?AdvancedQueryCapabilities $advancedQueryCapabilities       = null;
	public ?bool                      $supportsValidateSQL             = null;
	public ?bool                      $enableZDefaults                 = null;
	public ?string                    $serviceItemId                   = null;
	public ?bool                      $allowUpdateWithoutMValues       = null;
	public ?bool                      $supportsCoordinatesQuantization = null;

	/** @var ?\gcgov\arcgis\sdk\FeatureServerLayer\Type[] */
	public ?array $types = [];

	public ?string                            $capabilities                      = null;
	public ?float                             $maxScale                          = null;
	public ?bool                              $supportsAppend                    = null;
	public ?bool                              $supportsExceedsLimitStatistics    = null;
	public ?bool                              $defaultVisibility                 = null;
	public ?AdvancedQueryAnalyticCapabilities $advancedQueryAnalyticCapabilities = null;
	public ?bool                              $hasMetadata                       = null;
	public ?string                            $supportedAppendFormats            = null;
	public ?int                               $tileMaxRecordCount                = null;
	public ?string                            $typeIdField                       = null;
	public ?bool                              $supportsASyncCalculate            = null;
	public ?bool                              $supportsVCSProjection             = null;
	public ?string                            $supportedQueryFormats             = null;
	public ?string                            $sqlParserVersion                  = null;
	public ?DrawingInfo                       $drawingInfo                       = null;
	public ?GeometryField                     $geometryField                     = null;
	public ?string                            $copyrightText                     = null;
	public ?int                               $zDefault                          = null;
	public ?string                            $geometryType                      = null;


	public function __construct() {
	}

}
