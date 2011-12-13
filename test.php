<?php

require_once 'api/inc/login.php';

$email = 'test@test.com';
$password = 'testar';

$obj = new Login;
$test = $obj->login($email, $password);

var_dump($test);