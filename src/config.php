<?php

namespace gcgov\arcgis;

final class config {

	private string $baseUrl = '';
	private string $username = '';
	private string $password = '';
	private ?\gcgov\arcgis\sdk\Token $token = null;

	public function __construct( string $baseUrl='https://gis.garrettcounty.org/', string $username='', string $password='' ) {
		$this->setBaseUrl( $baseUrl );
		$this->setUsername( $username );
		$this->setPassword( $password );
	}

	public function getBaseUrl( string $append='' ): string {
		return rtrim($this->baseUrl, '/').'/'.ltrim($append, '/');
	}


	public function setBaseUrl( string $baseUrl ): void {
		$this->baseUrl = $baseUrl;
	}


	public function getUsername(): string {
		return $this->username;
	}


	public function setUsername( string $username ): void {
		$this->username = $username;
	}


	public function getPassword(): string {
		return $this->password;
	}


	public function setPassword( string $password ): void {
		$this->password = $password;
	}

	/**
	 * @return string
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \andrewsauder\jsonDeserialize\exceptions\jsonDeserializeException
	 */
	public function getToken(): string {
		if( !isset($this->token) || $this->token->expires<=time() ) {
			$this->token = \gcgov\arcgis\sdk\Token::get( $this );
		}
		return $this->token->token;
	}

}
