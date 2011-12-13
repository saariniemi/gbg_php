<?php

require_once './api/inc/requestJavaBackend.php';

class Login
{

	function __construct()
	{

	}

	function login($email, $password)
	{
		$arr = array('email' => $email, 'password' => $password);
		$params = json_encode($arr);

		$obj = new RequestJavaBackend;
		$response = $obj->requestJavaBackend($params);

		return $response;
	}

	function logout($userId)
	{

	}

}

