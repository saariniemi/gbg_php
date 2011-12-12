<?php

class User 
{

	function __construct()
	{
		
	}
	
	function getAllUsers()
	{
		return $allUsers;
	}

	function getName($userId)
	{
		return $name;
	}

	function getUserRolesInProject($projectId, $userId)
	{
		return $userRolesInProject;
	}

	function createUser($email, $password, $firstname, $lastname)
	{
		$url = 'http://';
		$params = 'username='.$email.'&password='.$password.'&firstname='.$firstname.'&lastname'.$lastname;

		$handle = curl_init();

		curl_setopt_array(
			$handle,
			array(
				CURLOPT_URL => $url,
				CURLOPT_POST => true,
				CURLOPT_POSTFIELDS => $params,
				CURLOPT_RETURNTRANSFER => true
			)
		);

		$response = curl_exec($handle);
		curl_close($handle);
		
		$decodedResponse = json_decode($response, true);
	}

	function editUser()
	{
		
	}

	function changeUserActivityStatus($userId)
	{
		
	}

	function getUserForProject($projectId)
	{
		return $userForProject;
	}

}