<?php

class _test{

	public $id,$name,$password;

	function __construct($method = null, $id = null, $args = null){
		
		if(in_array($method,array('GET','PUT','DELETE'))){
			$this->$method($id, $args);
		}elseif($method == 'POST'){
			$this->$method($args);
		}
	}
	
	function GET($id){
		$user = array("id" => 10, "name" => 20, "password" => 30);

		$this->id 		= $user['id'];
		$this->name 	= $user['name'];
		$this->password = $user['password'];
	}

	function POST(){
		
	}

	function PUT($id, $args){
		$allowed_fields = array("name","password");

		foreach($args as $arg => $value){
			if(in_array($arg,$allowed_fields)){
				$sql_parts[] = "`$arg` = '$value'";
			}
		}

		$fields = implode(',',$sql_parts);
		if($fields){
			$query = "
				UPDATE user
				SET $fields
				WHERE id=$id
			";
			mysql_query($query);
			$this->GET($id);
		}
		
	}

	function DELETE($id){
		
	}
}

?>