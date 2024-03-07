<?php

namespace gcgov\arcgis;


final class config {

	private static string $baseUrl = 'https://gis.garrettcounty.org/server/rest/services/';


	public static function getBaseUrl(): string {
		return self::$baseUrl;
	}


	public static function setBaseUrl( string $baseUrl ): void {
		self::$baseUrl = $baseUrl;
	}

}
