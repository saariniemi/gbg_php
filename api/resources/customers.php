<?php

require_once './inc/customer.php';

class _customers{

	function __construct($id = null){			
		$id;
	}
	
	function POST($args){
		$customer = new Customer;
	
		$customerName = $args['customerName'];

		$this->customerName = $customerName;
			
		$customer->createCustomer($customerName);
	}
}