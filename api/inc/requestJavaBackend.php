<?php

class RequestJavaBackend
{
	function __construct()
	{
		
	}

	function requestJavaBackend($params = NULL)
	{
		$url = 'http://192.168.0.133:8080/Tidrapportering-Java-Gbg/resources/users/login';

		$handle = curl_init();

		curl_setopt_array(
			$handle,
			array(
				CURLOPT_URL => $url,
				CURLOPT_POST => true,
				CURLOPT_POSTFIELDS => $params,
				CURLOPT_RETURNTRANSFER => true //gör så att curl_exec() INTE skriver ut data
			)
		);

		/*
		CURLOPT_POSTFIELDS	 
		The full data to post in a HTTP "POST" operation. To post a file, prepend a filename with @ and use the full path. 
		The filetype can be explicitly specified by following the filename with the type in the format ';type=mimetype'. 
		This parameter can either be passed as a urlencoded string like 'para1=val1&para2=val2&...' or as an array with the 
		field name as key and field data as value. If value is an array, the Content-Type header will be set to 
		multipart/form-data. As of PHP 5.2.0, value must be an array if files are passed to this option with the @ prefix.
		*/

		$response = curl_exec($handle);
		curl_close($handle);

		return $response;
	}
}