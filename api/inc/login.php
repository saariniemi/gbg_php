<?php

require_once 'requestJavaBackend.php';

class Login
{

	function __construct()
	{

	}

	function login($email, $password)
	{
		$arr = array('email' => $email, 'password' => $password);
		$params = 'email=test.com&password=testar';
		//Skapa en funktion som gör om en array till en sträng: para1=val1&para2=val2&

		$obj = new RequestJavaBackend;
		$response = $obj->requestJavaBackend($params); //skicka med array istället för sträng

		return $response;
	}

	function logout($userId)
	{

	}

}