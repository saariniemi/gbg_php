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

	function createUser($username, $password)
	{
		save_user($username, $password);
		
		return array("status" => true, "username" => $username);
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