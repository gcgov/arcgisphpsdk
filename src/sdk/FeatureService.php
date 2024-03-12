<?php

namespace gcgov\arcgis\sdk;

use gcgov\arcgis\config;

class FeatureService {

	private string        $serviceUrl = '';
	private config        $config;
	private FeatureServer $featureServer;

	/** @var \gcgov\arcgis\sdk\FeatureServerLayer[] */
	private array $featureServerLayers = [];


	public function __construct( config $config, string $serviceUrl ) {
		$this->config     = $config;
		$this->serviceUrl = rtrim( $serviceUrl, '/' );
	}


	/**
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \andrewsauder\jsonDeserialize\exceptions\jsonDeserializeException
	 */
	public function getFeatureServer(): FeatureServer {
		if( !isset( $this->featureServer ) ) {
			$token               = $this->config->getToken();
			$url                 = $this->getServiceUrl();
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
	public function getFeatureServerLayer( int|string $layerId = 0 ): FeatureServerLayer {
		if( !isset( $this->featureServerLayers[ $layerId ] ) ) {
			$token                                 = $this->config->getToken();
			$url                                   = $this->getServiceUrl( $layerId );
			$client                                = new \GuzzleHttp\Client();
			$res                                   = $client->request( 'GET', $url );
			$this->featureServerLayers[ $layerId ] = \gcgov\arcgis\sdk\FeatureServerLayer::jsonDeserialize( $res->getBody() );
		}
		return $this->featureServerLayers[ $layerId ];
	}


	public function getServiceUrl( string $append = '' ): string {
		return rtrim( $this->serviceUrl, '/' ) . '/' . ltrim( $append, '/' );
	}


	/**
	 * @return \gcgov\arcgis\config
	 */
	public function getConfig(): config {
		return $this->config;
	}

}
