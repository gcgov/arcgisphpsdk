<?php

namespace gcgov\arcgis\sdk;

use andrewsauder\jsonDeserialize\attributes\excludeJsonDeserialize;
use andrewsauder\jsonDeserialize\attributes\excludeJsonSerialize;
use andrewsauder\jsonDeserialize\jsonDeserialize;
use gcgov\arcgis\config;

class LocatorService extends jsonDeserialize {

	#[excludeJsonSerialize]
	#[excludeJsonDeserialize]
	private string $serviceUrl = '';

	#[excludeJsonSerialize]
	#[excludeJsonDeserialize]
	private config $config;

	public ?string $address              = null;
	public ?string $address2             = null;
	public ?string $address3             = null;
	public ?string $neighborhood         = null;
	public ?string $city                 = null;
	public ?string $subregion            = null;
	public ?string $region               = null;
	public ?string $postal               = null;
	public ?string $postalExt            = null;
	public ?string $countryCode          = null;
	public ?string $singleLine           = null;
	public ?string $outFields            = '*';
	public ?int    $maxLocations         = null;
	public bool    $matchOutOfRange      = false;
	public ?string $langCode             = null;
	public ?string $locationType         = null;
	public ?string $sourceCountry        = null;
	public ?string $category             = null;
	public ?string $location             = null;
	public ?string $searchExtent         = null;
	public ?string $outSR                = null;
	public ?string $magicKey             = null;
	public ?string $preferredLabelValues = null;
	public ?string $f                    = 'pjson';


	public function __construct( config $config, string $serviceUrl ) {
		$this->config     = $config;
		$this->serviceUrl = rtrim( $serviceUrl, '/' );
	}


	public function getServiceUrl( string $append = '' ): string {
		return rtrim( $this->serviceUrl, '/' ) . '/' . ltrim( $append, '/' );
	}


	public function toQueryString(): string {
		$params = array_filter( get_object_vars( $this ), function( $value ) {
			return $value!==null;
		} );
		return http_build_query( $params );
	}


	public function getConfig(): config {
		return $this->config;
	}

}
