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

	function createUser($emial, $password, $firstName, $lastName)
	{
		
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