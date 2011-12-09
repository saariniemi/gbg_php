<?php

	require_once './inc/project.php';

	class _projects{


		function __construct($id = null){			
			$id;
		}

		function GET($args = null, $sub = null){
		$project = new Project;

		switch($sub['collection']){
			default: if(isset($id)){
				$array = $project->getProject($id);
			} else {
				$array = $project->getProjects();
			}
		}

		foreach ($array as $key => $value) {
    		$this->$key = $value;
		}
	}
	
		function POST($args){
			$project = new Project;

			$projectName = $args['projectName'];
			$estimate = $args['estimate'];
			$customerId = $args['customerId'];

			$this->projectName = $projectName;
			$this->estimate = $estimate;
			$this->customerId = $customerId;

			$project->createProject($projectName, $estimate, $customerId);
		}
	}