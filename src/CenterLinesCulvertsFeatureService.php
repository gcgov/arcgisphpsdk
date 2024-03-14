<?php

namespace gcgov\arcgis;

use gcgov\arcgis\sdk\FeatureService;

class CenterLinesCulvertsFeatureService extends FeatureService {

	public function __construct( config $config ) {
		parent::__construct( $config, $config->getBaseUrl( 'server/rest/services/Addresses/Garrett_Centerlines/FeatureServer/' ), $config->getBaseUrl( 'server/rest/admin/services/Addresses/Garrett_Centerlines/FeatureServer/' ) );
	}


	/**
	 * @return \gcgov\arcgis\CenterLinesFeatureService\Feature[]
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \andrewsauder\jsonDeserialize\exceptions\jsonDeserializeException
	 */
	public function getAllFeatures( int $offset = 0, int $featuresPerCall = 1000, array $centerLineFeatureCollections = [] ): array {
		$token                          = $this->getConfig()->getToken();
		$url                            = $this->getServiceUrl( '1/query?f=geojson&where=1%3D1&outFields=*&returnGeometry=false&resultOffset=' . $offset . '&resultRecordCount=' . $featuresPerCall . '&token=' . $token );
		$client                         = new \GuzzleHttp\Client();
		$res                            = $client->request( 'GET', $url );
		$centerLineFeatureCollection = \gcgov\arcgis\CenterLinesFeatureService\FeatureQuery::jsonDeserialize( $res->getBody() );

		$centerLineFeatureCollections[] = $centerLineFeatureCollection;

		if( $centerLineFeatureCollection->exceededTransferLimit ) {
			return $this->getAllFeatures( $offset + $featuresPerCall, $featuresPerCall, $centerLineFeatureCollections );
		}

		$bridgesCulverts = [];
		foreach( $centerLineFeatureCollections as $centerLineFeatureCollection ) {
			$bridgesCulverts = array_merge( $bridgesCulverts, $centerLineFeatureCollection->features );
		}

		return $bridgesCulverts;
	}



	/**
	 * @return string[]
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \andrewsauder\jsonDeserialize\exceptions\jsonDeserializeException
	 */
	public function getAllRoadNames(): array {
		$roads     = $this->getAllFeatures();
		$roadNames = [];
		foreach( $roads as $road ) {
			$roadNames[] = $road->properties->RDNAMELOCAL;
		}
		$roadNames = array_unique( $roadNames );
		sort( $roadNames );
		return $roadNames;
	}

}
