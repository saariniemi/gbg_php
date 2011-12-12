<?php

require_once './inc/project.php';


abstract class Resource{
	private $obj,$id;
	//ORM = object 
	function __construct($orm, $id=null){
		$this->id = $id;
		$this->obj = new $orm();
	}

	function GET(){
		if(isset($this->id)){
			$this->GET_one();
		} else {
			$this->GET_all();
		}
	}

	function populate($array){
		foreach ($array as $key => $value) {
	    	$this->$key = $value;
		}
	}

}

class _projects extends Resource{
	/*
	FIXA SUB[COLLECTION] - ?? && ?? 
	FIXA CURL = ?? && ?? 
	FIXA ...
	FIXA ...
	OM VI KAN FIXA DETTA SÅ HAR VI KOMMIT LITE FRAM!!

	*/
	function __construct($id = null, $sub = null){			
		parent::__construct('Project',$id);
		$this->sub = $sub;
	}

	function GET_one(){
		if(!$this->sub){
			$array = $this->obj->getProject($this->id);
			$this->populate($array);
		}else{
			switch($this->sub['collection']){
				case 'users':
						$array = $this->obj->getUsersInProject();
						
					break;
				case 'roles':
					break;
				case 'customers':
					break; 
			}
		}
	}

	function GET_all(){
		$array = $this->obj->getProjects();
		$this->populate($array);
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