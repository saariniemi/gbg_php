<?php
class LoginFunctions
{	
	public function getAllInfo()
	{
		$userName = $_POST['username'];
		$userMail = $_POST['password'];
		$getAllInfo = array(
			$userMail,
			$userName 
		);
		print json_encode($getAllInfo);
	}				
}

$test = new LoginFunctions();
$test->getAllInfo();
