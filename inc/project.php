<?php

class Project
{

	function __construct()
	{
		
	}

	function getProjects()
	{
		return $projects;
	}

	function deleteUserFromProject($userId, $projectId)
	{
		
	}

	function getProjectsForUser($userId)
	{
		return $projectsForUser;
	}

	function changeProjectActivityStatus($projectId)
	{

	}

	function getAllProjectsForCustomer($customerId)
	{
		return $allProjectsForCustomer;
	}

	function createProject($projectName, $estimate, $projectBudget)
	{
		
	}

	function getProject($projectId)
	{
		return $project;
	}

	function editProject($projectName, $estimate, $customerId)
	{
		
	}

	function addUserToProject($projectId, $userId)
	{
		
	}

	function addUserRoleToProject($projectId, $roleId, $userId)
	{
		
	}

}