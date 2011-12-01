<?php

class Login
{

	function __construct()
	{
		$helloWorld = 'hello world';
	}

	function login($userEmail, $userPassword)
	{
	}

	function logout($userId)
	{
	}
	
	function helloWorld($helloWorld)
	{
		 
		//return $helloWorld;
		print json_encode($helloWorld);
		
	}

}
