<?php

namespace gcgov\arcgis\MajorMinorFeatureService;

class FeatureProperties extends \gcgov\arcgis\sdk\FeatureProperties {

	public ?int    $objectid                    = null;
	public ?string $globalid                    = null;
	public ?string $created_user                = null;
	public ?string $created_date                = null;
	public ?string $last_edited_user            = null;
	public ?string $last_edited_date            = null;
	public ?string $app_structure_id            = null;
	public ?string $roadname                    = null;
	public ?string $statestructurenumber        = null;
	public ?string $stateplannumber             = null;
	public ?string $countystructurenumber       = null;
	public ?string $majorminortype              = null;
	public ?string $structuretype               = null;
	public ?string $rating                      = null;
	public ?int    $adt                         = null;
	public ?string $deckrating                  = null;
	public ?string $channelrating               = null;
	public ?string $superstructurerating        = null;
	public ?string $culvertrating               = null;
	public ?string $substructurerating          = null;
	public ?string $roadgarage                  = null;
	public ?string $maintenanceresponsibility   = null;
	public ?string $openingtype                 = null;
	public ?string $material                    = null;
	public ?string $design                      = null;
	public ?string $railtype                    = null;
	public ?string $railup                      = null;
	public ?string $raildown                    = null;
	public ?string $channeltype                 = null;
	public ?string $piertype                    = null;
	public ?string $piermaterial                = null;
	public ?string $serviceonstructure          = null;
	public ?string $serviceunderstructure       = null;
	public ?float  $numberofspans               = null;
	public ?float  $numberofapproach            = null;
	public ?float  $topwidth                    = null;
	public ?float  $bottomwidth                 = null;
	public ?float  $channeldepth                = null;
	public ?float  $channelwidth                = null;
	public ?float  $guardraillength             = null;
	public ?float  $guardrailheight             = null;
	public ?float  $underclearance              = null;
	public ?float  $hydrolength                 = null;
	public ?float  $weightlimit                 = null;
	public ?float  $spanlength                  = null;
	public ?float  $strutlength                 = null;
	public ?float  $medianwidth                 = null;
	public ?float  $outtooutlength              = null;
	public ?float  $curbtocurblength            = null;
	public ?float  $cellwidth                   = null;
	public ?float  $deckthickness               = null;
	public ?float  $culvertlength               = null;
	public ?float  $verticaldepth               = null;
	public ?float  $distancetoup                = null;
	public ?float  $distancetodown              = null;
	public ?int    $yeartoreplace               = null;
	public ?int    $yeartorehabilitate          = null;
	public ?float  $estimatedreplacementcost    = null;
	public ?float  $estimatedrehabilitationcost = null;
	public ?int    $yearbuilt                   = null;
	public ?string $waterwayname                = null;

}
