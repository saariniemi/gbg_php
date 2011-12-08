<?php

	//vad har de för struktur?

	requestJavaBackend();

	function requestJavaBackend()
	{
		$handle = curl_init();
		$url = 'http://192.168.0.133:8080/Tidrapportering-Java-Gbg/resources/user/login';

		curl_setopt_array(
			$handle,
			array(
				CURLOPT_URL => $url,
				CURLOPT_POST => true,
				CURLOPT_POSTFIELDS => 'username=henning&password=mattias',
				CURLOPT_RETURNTRANSFER => true
			)
		);

		$response = curl_exec($handle);
		curl_close($handle);

		$decodedResponse = json_decode($response, true);

		return $decodedResponse;
	}