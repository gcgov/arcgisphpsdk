<?php

namespace gcgov\arcgis;

use gcgov\arcgis\sdk\FeatureService;

class BridgesCulvertsFeatureService extends FeatureService {

	public function __construct( config $config ) {
		parent::__construct( $config, $config->getBaseUrl( 'server/rest/services/Hosted/DEVELOPMENT_Bridges_and_Culverts/FeatureServer/'), $config->getBaseUrl( 'server/rest/admin/services/Hosted/DEVELOPMENT_Bridges_and_Culverts/FeatureServer/' ) );
	}


	/**
	 * @return \gcgov\arcgis\BridgesCulvertsFeatureService\Feature[]
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \andrewsauder\jsonDeserialize\exceptions\jsonDeserializeException
	 */
	public function getAllFeatures( int $offset = 0, int $featuresPerCall = 1000, array $bridgeCulvertFeatureCollections = [] ): array {
		$token                          = $this->getConfig()->getToken();
		$url                            = $this->getServiceUrl( '0/query?f=geojson&where=1%3D1&outFields=*&returnGeometry=false&resultOffset=' . $offset . '&resultRecordCount=' . $featuresPerCall . '&token=' . $token );
		$client                         = new \GuzzleHttp\Client();
		$res                            = $client->request( 'GET', $url );
		$bridgeCulvertFeatureCollection = \gcgov\arcgis\BridgesCulvertsFeatureService\FeatureQuery::jsonDeserialize( $res->getBody() );

		$bridgeCulvertFeatureCollections[] = $bridgeCulvertFeatureCollection;

		if( $bridgeCulvertFeatureCollection->exceededTransferLimit ) {
			return $this->getAllFeatures( $offset + $featuresPerCall, $featuresPerCall, $bridgeCulvertFeatureCollections );
		}

		$bridgesCulverts = [];
		foreach( $bridgeCulvertFeatureCollections as $bridgeCulvertFeatureCollection ) {
			$bridgesCulverts = array_merge( $bridgesCulverts, $bridgeCulvertFeatureCollection->features );
		}

		return $bridgesCulverts;
	}

}
