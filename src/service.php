<?php

namespace gcgov\arcgis;

use gcgov\arcgis\models\road\featureCollection;
use gcgov\arcgis\models\road\featureCollectionProperties;

class service {

	public function __construct() {

	}


	/**
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \andrewsauder\jsonDeserialize\exceptions\jsonDeserializeException
	 */
	public function getRoadsCount(): int {
		$url = config::getBaseUrl().'Addresses/Garrett_Centerlines/FeatureServer/1/query?f=geojson&where=1%3D1&outfields=*&returnGeometry=false&returnCountOnly=true';

		$client = new \GuzzleHttp\Client();
		$countGuzzleResponse = $client->request('GET', $url );

		$countFeatureCollection = featureCollection::jsonDeserialize($countGuzzleResponse->getBody());

		return $countFeatureCollection->properties->count;
	}


	/**
	 * @param int   $offset
	 * @param int   $featuresPerCall
	 * @param \gcgov\arcgis\models\road\featureCollection[] $roadFeatureCollections
	 *
	 * @return \gcgov\arcgis\models\road[]
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \andrewsauder\jsonDeserialize\exceptions\jsonDeserializeException
	 */
	public function getRoads(int $offset=0, int $featuresPerCall=1000, array $roadFeatureCollections=[]): array {

		$url = config::getBaseUrl().'Addresses/Garrett_Centerlines/FeatureServer/1/query?f=geojson&where=1%3D1&outfields=*&returnGeometry=false&resultOffset='.$offset.'&resultRecordCount='.$featuresPerCall;
		$client = new \GuzzleHttp\Client();
		$res = $client->request('GET', $url );
		$roadFeatureCollection = featureCollection::jsonDeserialize($res->getBody());

		$roadFeatureCollections[] =$roadFeatureCollection;

		if($roadFeatureCollection->exceededTransferLimit) {
			return $this->getRoads( $offset+$featuresPerCall, $featuresPerCall, $roadFeatureCollections);
		}

		$roads = [];
		foreach($roadFeatureCollections as $roadFeatureCollection) {
			$roads = array_merge( $roads, $roadFeatureCollection->features );
		}

		return $roads;
	}

	private function _doGetRoads(int $offset=0, int $featuresPerCall=1000) {
		$url = config::getBaseUrl().'Addresses/Garrett_Centerlines/FeatureServer/1/query?f=geojson&where=1%3D1&outfields=*&returnGeometry=false&returnOffset='.$offset.'&resultRecordCount='.$featuresPerCall;
		$client = new \GuzzleHttp\Client();
		$res = $client->request('GET', $url );
		$roadFeatureCollection = featureCollection::jsonDeserialize($res->getBody());
		return $roadFeatureCollection;
	}

	/**
	 * @return string[]
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \andrewsauder\jsonDeserialize\exceptions\jsonDeserializeException
	 */
	public function getRoadNames(): array {
		$roads = $this->getRoads();
		$roadNames = [];
		foreach($roads as $road) {
			$roadNames[] = $road->properties->RDNAMELOCAL;
		}
		$roadNames = array_unique($roadNames);
		sort($roadNames);
		return $roadNames;
	}
}
