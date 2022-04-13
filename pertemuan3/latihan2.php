<?php




$data = file_get_contents('data.json');

$result = json_decode($data, true);

var_dump($result);