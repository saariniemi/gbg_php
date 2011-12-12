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

if(isset($path_parts[0])){ $return_format = $path_parts[0]; } else { $return_format = null; }
if(isset($path_parts[1])){ $collection = $path_parts[1]; } else { $resoucre = null; }
if(isset($path_parts[2])){ $resource_id = $path_parts[2]; } else { $resource_id = null; }
if(isset($path_parts[3])){ $sub['collection'] = $path_parts[3]; } else { $sub_resource = null; }
if(isset($path_parts[4])){ $sub['resource_id'] = $path_parts[4]; } else { $sub_resource_id = null; }
if((!isset($sub['collection']))&&(!isset($sub['resource_id']))) { $sub = null; }

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

$filename = 'resources/' . $collection . '.php';

if(file_exists($filename)){
	require_once($filename);
	if(class_exists("_".$collection)){
		$class = "_".$collection;

		$obj = new $class($resource_id,$sub);

		$obj->$method($args);
		

		output($obj, $return_format);

	}else{ echo "Resource," . $collection . "doesn't exist"; }
}else{ echo "File," . $filename .  "doesn't exists"; }

function output($data, $format = 'json'){
	switch($format){
		case 'text': print_r($data); break;
		case 'jsonp': echo $_GET['callback'] . "(" . json_encode($data) . ");"; break;
		case 'json': default: echo json_encode($data); break;
	}
}