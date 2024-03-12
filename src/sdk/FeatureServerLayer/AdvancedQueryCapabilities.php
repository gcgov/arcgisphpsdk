<?php

namespace gcgov\arcgis\sdk\FeatureServerLayer;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class AdvancedQueryCapabilities extends jsonDeserialize {

	public ?bool $supportsSqlExpression                 = null;
	public ?bool $supportsQueryWithResultType           = null;
	public ?bool $supportsQueryWithCacheHint            = null;
	public ?bool $supportsQueryWithDatumTransformation  = null;
	public ?bool $supportsQueryAttachmentsWithReturnUrl = null;
	public ?bool $supportsQueryDateBins                 = null;
	public ?bool $supportsQueryWithLodSR                = null;
	public ?bool $supportsPaginationOnAggregatedQueries = null;
	public ?bool $supportsPagination                    = null;
	public ?bool $supportsMaxRecordCountFactor          = null;
	public ?bool $supportsStatistics                    = null;
	public ?bool $supportsOrderBy                       = null;
	public ?bool $supportsQueryWithDistance             = null;
	public ?bool $supportsLod                           = null;
	public ?bool $supportsCountDistinct                 = null;
	public ?bool $supportsQueryAttachments              = null;
	public ?bool $supportsReturningQueryExtent          = null;
	public ?bool $supportsQueryAttachmentsCountOnly     = null;
	public ?bool $supportsOrderByOnlyOnLayerFields      = null;
	public ?bool $supportsOutFieldSqlExpression         = null;
	public ?bool $supportsTopFeaturesQuery              = null;
	public ?bool $supportsDistinct                      = null;
	public ?bool $supportsReturningGeometryCentroid     = null;
	public ?bool $supportsQueryAnalytic                 = null;
	public ?bool $supportsPercentileStatistics          = null;
	public ?bool $supportsHavingClause                  = null;


	public function __construct() {
	}

}
