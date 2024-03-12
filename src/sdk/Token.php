<?php

namespace gcgov\arcgis\sdk;

use andrewsauder\jsonDeserialize\jsonDeserialize;
use gcgov\arcgis\config;

class Token extends jsonDeserialize {

	public string $token   = '';
	public int    $expires = 0;
	public bool   $ssl     = true;


	public function __construct() {
	}


	/**
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \andrewsauder\jsonDeserialize\exceptions\jsonDeserializeException
	 */
	public static function get( config $config ): self {
		$url    = $config->getBaseUrl() . 'portal/sharing/rest/generateToken';
		$client = new \GuzzleHttp\Client();
		$res    = $client->request( 'POST', $url, [
			'form_params' => [
				'username' => $config->getUsername(),
				'password' => $config->getPassword(),
				'client'   => 'referer',
				'referer'  => 'https://apps.garrettcountymd.gov',
				'f'        => 'json',
			]
		] );

		return \gcgov\arcgis\models\token::jsonDeserialize( $res->getBody() );
	}

}
