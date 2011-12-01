<?php

class LoginFunctions
{	
	public function getAllInfo()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$getAllInfo = array(
			$username, $password
		);
		
		print json_encode($getAllInfo);
	}

	/*public function checkIfUsernameAndPasswordIsCorrect($username, $password)
	{
		$usernameAndPasswordIsCorrect = FALSE;

		$usernameFromDb = //Får username från DB;
		$passwordFromDb = //Får password från DB;

		if ($username == $usernameFromDb && $password == $passwordFromDb)
		{
			return TRUE;
		}
		else 
		{
			return FALSE;
		}

		return $usernameAndPasswordIsCorrect;
	}*/
}

$login = new LoginFunctions();
$login->getAllInfo();