<?php

class Project
{

	function __construct()
	{
		
	}

	function getProjects()
	{
		$projects = array(
				array("id" => 10, "projectName" => 'Niko Saariniemi', "progress" => 35, "estimate" => 120, "customerName" => 'Niko ZarraN Saariniemi', "active" => true),
				array("id" => 20, "projectName" => 'Daniel Brodin', "progress" => 40, "estimate" => 50, "customerName" => 'JS Knugen', "active" => false)	
		);
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