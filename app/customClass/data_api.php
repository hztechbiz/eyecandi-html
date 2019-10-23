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

	public static function get_ages(){
		$client = new GuzzleHttp\Client;
		$response = $client->get('http://testapi.framesdata.com:80/api/agegroups?auth=4046ecc3-bc75-4bdf-ba48-e11ef8c8a0c1', [
		]);
		$response = json_decode($response->getBody(), true);
		return $response;
	}

	public static function get_colors(){
		$client = new GuzzleHttp\Client;
		$response = $client->get('http://testapi.framesdata.com:80/api/colors?auth=4046ecc3-bc75-4bdf-ba48-e11ef8c8a0c1', [
		]);
		$response = json_decode($response->getBody(), true);
		return $response;
	}

	public static function get_materials(){
		$client = new GuzzleHttp\Client;
		$response = $client->get('http://testapi.framesdata.com:80/api/materials?auth=4046ecc3-bc75-4bdf-ba48-e11ef8c8a0c1', [
		]);
		$response = json_decode($response->getBody(), true);
		return $response;
	}

	public static function get_genders(){
		$client = new GuzzleHttp\Client;
		$response = $client->get('http://testapi.framesdata.com:80/api/gendergroups?auth=4046ecc3-bc75-4bdf-ba48-e11ef8c8a0c1', [
		]);
		$response = json_decode($response->getBody(), true);
		return $response;
	}
	public static function get_frame($styleid){
		$client = new GuzzleHttp\Client;
		$url = 'http://testapi.framesdata.com:80/api/styles/'.$styleid.'?auth=4046ecc3-bc75-4bdf-ba48-e11ef8c8a0c1';
		$response = $client->get($url, [
		]);
		$response = json_decode($response->getBody(), true);
		return $response;
	}

	public static function get_images($frameid,$manufacturerid,$size)
	{
		$client = new GuzzleHttp\Client;
		$url = 'http://testapi.framesdata.com:80/api/images?auth=4046ecc3-bc75-4bdf-ba48-e11ef8c8a0c1&size=Small&id=116807';
		// dd($url);
		$response = $client->get($url, [
		]);
		$response = $response->getBody()->getContents();
		dd($response);
		// $bin = data_api::base64_to_jpeg($response,'tmp.jpg');

// Load GD resource from binary data
// $im = imageCreateFromString($bin);
dd($bin);
		return $response;	
	}

	public static function base64_to_jpeg($base64_string, $output_file) {
    // open the output file for writing
    $ifp = fopen( $output_file, 'wb' ); 

    // split the string on commas
    // $data[ 0 ] == "data:image/png;base64"
    // $data[ 1 ] == <actual base64 string>
    $data = explode( ',', $base64_string );

    // we could add validation here with ensuring count( $data ) > 1
    fwrite( $ifp, base64_decode( $data[ 1 ] ) );

    // clean up the file resource
    fclose( $ifp ); 

    return $output_file; 
}

}