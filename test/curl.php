<?php 

//cURL

$url = 'http://www.google.se';
$json = file_get_contents($url);
$obj = json_decode($json);
$obj->id;
$obj->name;

echo "TEST!!!";

curl_init();

echo "var dump json";
var_dump($json); //sökfält

echo "var dump obj";
var_dump($obj); //NULL

echo "print r(json)";
echo "<pre>";
print_r($json); //sökfält
echo "</pre>";

echo "print r(obj)";
echo "<pre>";
print_r($obj); //syns ej
echo "</pre>";