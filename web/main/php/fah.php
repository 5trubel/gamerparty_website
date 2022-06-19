<?php
//Get Team Data
$api = 'https://api2.foldingathome.org/team/241564';
//Deseriliaze the Data
$data = file_get_contents($api);
$array = json_decode($data, true);
$fah = array();
//JSON to ARRAY to STRING
$fah['score'] = $array['score'];
$fah['wu'] = $array['wus'];
$fah['rank'] = $array['rank'];

unset($data, $array, $api);
