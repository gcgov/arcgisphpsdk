<?php

namespace gcgov\arcgis;

use gcgov\arcgis\sdk\FeatureService;

class DevelopmentMajorMinorFeatureService extends FeatureService {

	public function __construct( config $config ) {
		parent::__construct( $config, $config->getBaseUrl( 'server/rest/services/Hosted/DEVELOPMENT_Major_and_Minor_Structures/FeatureServer/'), $config->getBaseUrl( 'server/rest/admin/services/Hosted/DEVELOPMENT_Major_and_Minor_Structures/FeatureServer/' ) );
	}


	/**
	 * @return \gcgov\arcgis\MajorMinorFeatureService\Feature[]
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \andrewsauder\jsonDeserialize\exceptions\jsonDeserializeException
	 */
	public function getAllFeatures( int $offset = 0, int $featuresPerCall = 1000, array $majorMinorFeatureCollections = [] ): array {
		$token                          = $this->getConfig()->getToken();
		$url                            = $this->getServiceUrl( '0/query?f=geojson&where=1%3D1&outFields=*&resultOffset=' . $offset . '&resultRecordCount=' . $featuresPerCall . '&token=' . $token );
		$client                         = new \GuzzleHttp\Client();
		$res                            = $client->request( 'GET', $url );
		$majorMinorFeatureCollection = \gcgov\arcgis\MajorMinorFeatureService\FeatureQuery::jsonDeserialize( $res->getBody() );

		$majorMinorFeatureCollections[] = $majorMinorFeatureCollection;

		if( $majorMinorFeatureCollection->exceededTransferLimit ) {
			return $this->getAllFeatures( $offset + $featuresPerCall, $featuresPerCall, $majorMinorFeatureCollections );
		}

		$bridgesCulverts = [];
		foreach( $majorMinorFeatureCollections as $majorMinorFeatureCollection ) {
			$bridgesCulverts = array_merge( $bridgesCulverts, $majorMinorFeatureCollection->features );
		}

		return $bridgesCulverts;
	}

}
