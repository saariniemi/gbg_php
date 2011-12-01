<?php

require_once 'inc/customer.php';

$customer = new Customer;

$name = $_POST['name'];
$doesCustomerExist = $customer->customerExists($name);

if($doesCustomerExist)
{
	$message = 'Fail';
	print json_encode($message);
}
else
{
	$customer->createCustomer($name);
	$message = 'Great Success';
	print json_encode($message);
}