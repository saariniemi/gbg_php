<?php

class User {

	private function __construct()
	{
		
	}
	
	private function getAllUsers()
	{
		return $allUsers;
	}

	private function getName($userId)
	{
		return $name;
	}

	private function getUserRolesInProject($projectId, $userId)
	{
		return $userRolesInProject;
	}

	private function createUser($username, $password)
	{
		save_user($username, $password);
		
		return array("status" => true, "username" => $username);
	}

	private function editUser()
	{
		
	}

	private function changeUserActivityStatus($userId)
	{
		
	}

	private function getUserForProject($projectId)
	{
		return $userForProject;
	}

}