<?php

require_once './inc/user.php';

class _users{

	function __construct($id = null){			
		$id;
	}
	
	function POST($args){
		$user = new User;

		$email = $args['email'];
		$password = $args['password'];
		$firstName = $args['firstName'];
		$lastName = $args['lastName'];

		$this->email = $email;
		$this->password = $password;
		$this->firstName = $firstName;
		$this->lastName = $lastName;

		$user->createUser($email, $password, $firstName, $lastName);
	}
}