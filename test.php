<?php

require_once 'api/inc/login.php';

$email = 'test.com';
$password = 'testar';

$obj = new Login;
$test = $obj->login($email, $password);

echo $test;