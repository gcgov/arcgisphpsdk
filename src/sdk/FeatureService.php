<?php

namespace gcgov\arcgis\sdk;

use gcgov\arcgis\config;

class FeatureService {

	private string        $serviceUrl      = '';
	private string        $adminServiceUrl = '';
	private config        $config;
	private FeatureServer $featureServer;

	/** @var \gcgov\arcgis\sdk\FeatureServerLayer[] */
	private array $featureServerLayers = [];


	public function __construct( config $config, string $serviceUrl, string $adminServiceUrl ) {
		$this->config          = $config;
		$this->serviceUrl      = rtrim( $serviceUrl, '/' );
		$this->adminServiceUrl = rtrim( $adminServiceUrl, '/' );
	}


	/**
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \andrewsauder\jsonDeserialize\exceptions\jsonDeserializeException
	 */
	public function getFeatureServer( bool $forceFetch = false ): FeatureServer {
		if( !isset( $this->featureServer ) || $forceFetch ) {
			$token               = $this->config->getToken();
			$url                 = $this->getServiceUrl( '?f=json&token=' . $token );
			$client              = new \GuzzleHttp\Client();
			$res                 = $client->request( 'GET', $url );
			$this->featureServer = \gcgov\arcgis\sdk\FeatureServer::jsonDeserialize( $res->getBody() );
		}
		return $this->featureServer;
	}


	/**
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \andrewsauder\jsonDeserialize\exceptions\jsonDeserializeException
	 */
	public function getFeatureServerLayer( int|string $layerId = 0, bool $forceFetch = false ): FeatureServerLayer {
		if( !isset( $this->featureServerLayers[ $layerId ] ) || $forceFetch ) {
			$token                                 = $this->config->getToken();
			$url                                   = $this->getServiceUrl( $layerId . '?f=json&token=' . $token );
			$client                                = new \GuzzleHttp\Client();
			$res                                   = $client->request( 'GET', $url );
			$this->featureServerLayers[ $layerId ] = \gcgov\arcgis\sdk\FeatureServerLayer::jsonDeserialize( $res->getBody() );
		}
		return $this->featureServerLayers[ $layerId ];
	}


	/**
	 * @param \gcgov\arcgis\sdk\FeatureServerLayer\Field[] $featureServerLayerFieldDefinitions
	 * @param int|string                                   $layerId
	 *
	 * @return \gcgov\arcgis\sdk\Response\UpdateDefinition
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \andrewsauder\jsonDeserialize\exceptions\jsonDeserializeException
	 */
	public function updateFeatureLayerFields( array $featureServerLayerFieldDefinitions, int|string $layerId = 0 ): Response\UpdateDefinition {

		$token       = $this->config->getToken();
		$url         = $this->getAdminServiceUrl( $layerId . '/updateDefinition' );
		$client      = new \GuzzleHttp\Client();
		$postOptions = [
			'form_params' => [
				'updateDefinition' => json_encode( [ 'fields' => $featureServerLayerFieldDefinitions ] ),
				'f'                => 'json',
				'token'            => $token
			]
		];
		$res         = $client->request( 'POST', $url, $postOptions );

		$featureServerLayer = $this->getFeatureServerLayer( $layerId, true );

		return Response\UpdateDefinition::jsonDeserialize( $res->getBody() );
	}


	/**
	 * @param \gcgov\arcgis\sdk\FeatureServerLayer\Field[] $featureLayerFieldDefinitions
	 * @param int|string                                   $layerId
	 *
	 * @return \gcgov\arcgis\sdk\Response\AddDefinition
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \andrewsauder\jsonDeserialize\exceptions\jsonDeserializeException
	 */
	public function addFeatureLayerFields( array $featureLayerFieldDefinitions, int|string $layerId = 0 ): Response\AddDefinition {

		$token       = $this->config->getToken();
		$url         = $this->getAdminServiceUrl( $layerId . '/addToDefinition' );
		$client      = new \GuzzleHttp\Client();
		$postOptions = [
			'form_params' => [
				'addToDefinition' => json_encode( [ 'fields' => $featureLayerFieldDefinitions ] ),
				'f'               => 'json',
				'token'           => $token
			]
		];
		$res         = $client->request( 'POST', $url, $postOptions );

		return Response\AddDefinition::jsonDeserialize( $res->getBody() );
	}


	/**
	 * @param \gcgov\arcgis\sdk\Feature[] $features
	 * @param int|string                  $layerId
	 *
	 * @return \gcgov\arcgis\sdk\Response\UpdateFeature
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \andrewsauder\jsonDeserialize\exceptions\jsonDeserializeException
	 */
	public function updateFeatures( array $features, int|string $layerId = 0 ): Response\UpdateFeature {

		$updateFeatures = [];
		foreach( $features as $feature ) {
			$updateFeatures[] = UpdateFeature::fromFeature( $feature );
		}

		$token       = $this->config->getToken();
		$url         = $this->getServiceUrl( $layerId . '/updateFeatures' );
		$client      = new \GuzzleHttp\Client();
		$postOptions = [
			'form_params' => [
				'features' => json_encode( $updateFeatures ),
				'f'        => 'json',
				'token'    => $token
			]
		];
		$res         = $client->request( 'POST', $url, $postOptions );

		return Response\UpdateFeature::jsonDeserialize( $res->getBody() );
	}


	/**
	 * @param \gcgov\arcgis\sdk\Feature[] $features
	 * @param int|string                  $layerId
	 *
	 * @return \gcgov\arcgis\sdk\Response\AddFeature
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \andrewsauder\jsonDeserialize\exceptions\jsonDeserializeException
	 */
	public function addFeatures( array $features, int|string $layerId = 0 ): Response\AddFeature {

		$addFeatures = [];
		foreach( $features as $feature ) {
			$addFeatures[] = AddFeature::fromFeature( $feature );
		}

		$token       = $this->config->getToken();
		$url         = $this->getServiceUrl( $layerId . '/addFeatures' );
		$client      = new \GuzzleHttp\Client();
		$postOptions = [
			'form_params' => [
				'features' => json_encode( $addFeatures ),
				'f'        => 'json',
				'token'    => $token
			]
		];
		$res         = $client->request( 'POST', $url, $postOptions );

		return Response\AddFeature::jsonDeserialize( $res->getBody() );
	}


	/**
	 * @param \gcgov\arcgis\sdk\Feature[] $features
	 * @param int|string                  $layerId
	 *
	 * @return \gcgov\arcgis\sdk\Response\DeleteFeature
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \andrewsauder\jsonDeserialize\exceptions\jsonDeserializeException
	 */
	public function deleteFeatures( array $features, int|string $layerId = 0 ): Response\DeleteFeature {

		$deleteFeatureObjectIds = [];
		foreach( $features as $feature ) {
			$objectId = $feature->getObjectId();
			if( $objectId!==null ) {
				$deleteFeatureObjectIds[] = $feature->getObjectId();
			}
		}

		$token       = $this->config->getToken();
		$url         = $this->getServiceUrl( $layerId . '/deleteFeatures' );
		$client      = new \GuzzleHttp\Client();
		$postOptions = [
			'form_params' => [
				'objectIds' => implode( ', ', $deleteFeatureObjectIds ),
				'f'         => 'json',
				'token'     => $token
			]
		];
		$res         = $client->request( 'POST', $url, $postOptions );

		return Response\DeleteFeature::jsonDeserialize( $res->getBody() );
	}


	public function getServiceUrl( string $append = '' ): string {
		return rtrim( $this->serviceUrl, '/' ) . '/' . ltrim( $append, '/' );
	}


	public function getAdminServiceUrl( string $append = '' ): string {
		return rtrim( $this->adminServiceUrl, '/' ) . '/' . ltrim( $append, '/' );
	}


	/**
	 * @return \gcgov\arcgis\config
	 */
	public function getConfig(): config {
		return $this->config;
	}

}
