<?php

namespace gcgov\arcgis;

use gcgov\arcgis\sdk\FeatureService;

class MajorMinorFeatureService extends FeatureService {

	public function __construct( config $config ) {
		if($config->isDevelopment()) {
			$serviceUrl = $config->getBaseUrl( 'server/rest/services/Hosted/Major_and_Minor_Structures/FeatureServer/');
			$adminUrl = $config->getBaseUrl( 'server/rest/admin/services/Hosted/Major_and_Minor_Structures/FeatureServer/' );
		}
		else {
			$serviceUrl = $config->getBaseUrl( 'server/rest/services/Hosted/DEVELOPMENT_Major_and_Minor_Structures/FeatureServer/');
			$adminUrl = $config->getBaseUrl( 'server/rest/admin/services/Hosted/DEVELOPMENT_Major_and_Minor_Structures/FeatureServer/' );
		}

		parent::__construct( $config, $serviceUrl, $adminUrl );
	}


	/**
	 * @return \gcgov\arcgis\MajorMinorFeatureService\Feature[]
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \andrewsauder\jsonDeserialize\exceptions\jsonDeserializeException
	 */
	public function getAllFeatures( int $offset = 0, int $featuresPerCall = 1000, array $bridgeCulvertFeatureCollections = [] ): array {
		$token                          = $this->getConfig()->getToken();
		$url                            = $this->getServiceUrl( '0/query?f=geojson&where=1%3D1&outFields=*&resultOffset=' . $offset . '&resultRecordCount=' . $featuresPerCall . '&token=' . $token );
		$client                         = new \GuzzleHttp\Client();
		$res                            = $client->request( 'GET', $url );
		$bridgeCulvertFeatureCollection = \gcgov\arcgis\MajorMinorFeatureService\FeatureQuery::jsonDeserialize( $res->getBody() );

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
