<?php

class RequestJavaBackend
{
	function __construct()
	{
		
	}

	function requestJavaBackend($url, $params = NULL, $method = 'CURLOPT_GET')
	{
/*		$url = 'http://192.168.0.133:8080/Tidrapportering-Java-Gbg/resources/user/login';
		$params = 'username=henning&password=mattias';*/

		$handle = curl_init();

		curl_setopt_array(
			$handle,
			array(
				CURLOPT_URL => $url,
				$method => true,
				CURLOPT_POSTFIELDS => $params,
				CURLOPT_RETURNTRANSFER => true
			)
		);

		$response = curl_exec($handle);
		curl_close($handle);
		
		$decodedResponse = json_decode($response, true);

		return $decodedResponse;
	}
}