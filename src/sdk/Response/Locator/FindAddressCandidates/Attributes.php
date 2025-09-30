<?php

namespace gcgov\arcgis\sdk\Response\Locator\FindAddressCandidates;

use andrewsauder\jsonDeserialize\jsonDeserialize;

class Attributes extends jsonDeserialize {

	public string $Status = '';
	public float $Score = 0.0;
	public string $Match_addr = '';
	public string $LongLabel = '';
	public string $ShortLabel = '';
	public string $Addr_type = '';
	public string $Type = '';
	public string $PlaceName = '';
	public string $Place_addr = '';
	public string $Phone = '';
	public string $URL = '';
	public int $Rank = 0;
	public string $AddBldg = '';
	public string $AddNum = '';
	public string $AddNumFrom = '';
	public string $AddNumTo = '';
	public string $AddRange = '';
	public string $Side = '';
	public string $StPreDir = '';
	public string $StPreType = '';
	public string $StName = '';
	public string $StType = '';
	public string $StDir = '';
	public string $BldgType = '';
	public string $BldgName = '';
	public string $LevelType = '';
	public string $LevelName = '';
	public string $UnitType = '';
	public string $UnitName = '';
	public string $SubAddr = '';
	public string $StAddr = '';
	public string $Block = '';
	public string $Sector = '';
	public string $Nbrhd = '';
	public string $District = '';
	public string $City = '';
	public string $MetroArea = '';
	public string $Subregion = '';
	public string $Region = '';
	public string $RegionAbbr = '';
	public string $Territory = '';
	public string $Zone = '';
	public string $Postal = '';
	public string $PostalExt = '';
	public string $Country = '';
	public string $CntryName = '';
	public string $LangCode = '';
	public float $Distance = 0.0;
	public float $X = 0.0;
	public float $Y = 0.0;
	public float $Z = 0.0;
	public float $DisplayX = 0.0;
	public float $DisplayY = 0.0;
	public float $DisplayZ = 0.0;
	public float $Xmin = 0.0;
	public float $Xmax = 0.0;
	public float $Ymin = 0.0;
	public float $Ymax = 0.0;
	public string $ExInfo = '';

	public function __construct() {

	}

}
