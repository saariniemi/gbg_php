<?php

$url = array_keys($_GET);
$resource_path = $url[0];

$path_parts = explode("/", $resource_path);

foreach($path_parts as $part){
	if(($part != "") && (!is_null($part))){
		$parts[] = $part;
	}
}

$path_parts = $parts;

if(isset($path_parts[0])){ $return_format = $path_parts[0]; }
if(isset($path_parts[1])){ $resource = $path_parts[1]; }
if(isset($path_parts[2])){ $resource_id = $path_parts[2]; }
if(isset($path_parts[3])){ $sub_resource = $path_parts[3]; }
if(isset($path_parts[4])){ $sub_resource_id = $path_parts[4]; }

$method = $_SERVER['REQUEST_METHOD'];

switch($method){
	case 'GET':
		$args = $_GET;
		break;
	case 'POST':
		$args = $_POST;
		break;
	case 'PUT': 
		parse_str(file_get_contents('php://input'), $put_vars);  
        $args = $put_vars;
        break;
}

$filename = 'resources/' . $resource . '.php';

if(file_exists($filename)){
	require_once($filename);
	if(class_exists("_".$resource)){
		$class = "_".$resource;
		$obj = new $class(
			$method,
			$args,
			$resource_id,
			$sub_resource,
			$sub_resource_id
		);
		output($obj, $return_format);
	}else{ echo "Resource doesn't exist"; }
}else{ echo "File doesn't exists"; }

function output($data, $format = 'json'){
	switch($format){
		case 'text': print_r($data); break;
		case 'json': default: echo json_encode($data);
	}
}