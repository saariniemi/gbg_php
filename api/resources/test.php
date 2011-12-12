<?php

class _test{

	function __construct($id = null){
		$this->id = $id;
	}
	
	function GET($args = null, $sub = null){
		switch($sub['collection']){
			case 'users':
				$array = array(
					'users' => array(
						array("id" => 10, "name" => 20, "password" => 30),
						array("id" => 10, "name" => 20, "password" => 30),
						array("id" => 10, "name" => 20, "password" => 30)
					)
				); break;
			default: $array = array("id" => 10, "name" => 20, "password" => 30);
		}

		foreach ($array as $key => $value) {
    		$this->$key = $value;
		}
	}


	function POST($args){
		$name = $args['name'];
		$this->name = $name;
	}

	function PUT($args){

		$array = array("id" => 10, "name" => 20, "password" => 30);
		$allowed_fields = array("name","password");

		foreach($args as $arg => $value){
			if(in_array($arg,$allowed_fields)){
				$array[$arg] = $value;
			}
		}
		
		foreach ($array as $key => $value) {
    		$this->$key = $value;
		}
	}

	function DELETE(){
		
	}
}