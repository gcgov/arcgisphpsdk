<?php

namespace gcgov\arcgis;

use gcgov\arcgis\sdk\LocatorService;

class AddressLocator extends LocatorService {

	public function __construct( config $config ) {
		if( $config->isDevelopment() ) {
			$serviceUrl = $config->getBaseUrl( 'server/rest/services/Addresses/Garrett_Address_Locator/GeocodeServer' );
		}
		else {
			$serviceUrl = $config->getBaseUrl( 'server/rest/services/Addresses/Garrett_Address_Locator/GeocodeServer' );
		}

		parent::__construct( $config, $serviceUrl );
	}


	/**
	 * @return \gcgov\arcgis\sdk\Response\Locator\FindAddressCandidates\FindAddressCandidates
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \andrewsauder\jsonDeserialize\exceptions\jsonDeserializeException
	 */
	public function findAddressCandidates(): \gcgov\arcgis\sdk\Response\Locator\FindAddressCandidates\FindAddressCandidates {
		$token    = $this->getConfig()->getToken();
		$url      = $this->getServiceUrl( 'findAddressCandidates?token=' . $token . '&' . $this->toQueryString() );
		$client   = new \GuzzleHttp\Client();
		$response = $client->request( 'GET', $url );
		return \gcgov\arcgis\sdk\Response\Locator\FindAddressCandidates\FindAddressCandidates::jsonDeserialize( $response->getBody() );
	}

}
