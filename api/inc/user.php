<?php

require_once './requireJavaBackend.php';

//Extenda RequireJavaBackend istället? Niko är emot!

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

		$obj = new RequestJavaBackend;

		$url = 'http://';
		$params = 'username='.$email.'&password='.$password.'&firstname='.$firstname.'&lastname'.$lastname;

		//POST när man skapar = Räcker att kalla på funktionen

		$obj->requireJavaBackend($url, $params);
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