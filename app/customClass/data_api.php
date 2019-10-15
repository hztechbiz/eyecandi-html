<?php

namespace App\customClass;

use GuzzleHttp;

class data_api{
	public static function get_brands(){
		$client = new GuzzleHttp\Client;
		$response = $client->get('http://testapi.framesdata.com:80/api/brands?auth=%204046ecc3-bc75-4bdf-ba48-e11ef8c8a0c1', [
		]);
		$response = json_decode($response->getBody(), true);
		return $response;
	}
}