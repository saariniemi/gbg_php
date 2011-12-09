<?php

class Project
{

	function __construct()
	{
		
	}

	function getProjects()
	{
		$projects = array(
				array("id" => 10, "projectName" => 'NS', "progress" => 30, "estimate" => 40, "customerName" => 'Niko Saariniemi', "active" => true),
				array("id" => 10, "projectName" => 'NS', "progress" => 30, "estimate" => 40, "customerName" => 'Niko Saariniemi', "active" => true)	
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