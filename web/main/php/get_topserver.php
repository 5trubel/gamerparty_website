<?php
//Create Arrays
$players = array();
$topserver = array();
//Put all Playercounts with the server into an seperate Array
foreach ($status as $key => $server) {
    foreach($server as $a => $schlussel){
         if($a == "players"){
            $players[$key] = $schlussel;
         }
     }
}

//Get the Keyname of the "popularest" Server
$topserver['keyname'] = array_search(max($players), $players);
//Get all other Infos with the Keyname
$topserver['name'] = $status[$topserver['keyname']]['name'];
$topserver['game'] = $status[$topserver['keyname']]['game'];
$topserver['gamekey'] = $status[$topserver['keyname']]['game'];
$topserver['map'] = $status[$topserver['keyname']]['map'];
$topserver['ip'] = "gamerparty.eu:" . explode(":", $servers[$topserver['keyname']])[1];
$topserver['player'] = $status[$topserver['keyname']]['players'];
$topserver['playermax'] = $status[$topserver['keyname']]['playersmax'];


//Beautify the name a bit
//$topserver['name'] = explode("[", str_replace("[EU]", $topserver['name']))[1];

//Set Image for the specific Game
if($topserver['gamekey'] == "garrysmod"){
    $topserver['mapimg'] = "https://image.gametracker.com/images/maps/160x120/garrysmod/" . $topserver['map'] . ".jpg";
}else if($topserver['gamekey'] == "insurgency"){
    $topserver['mapimg'] = "https://image.gametracker.com/images/maps/160x120/ins/" . $topserver['map'] . ".jpg";
}else if($topserver['gamekey'] == "Arma3"){
    $topserver['mapimg'] = "https://image.gametracker.com/images/maps/160x120/arma3/" . strtolower($topserver['map']) . ".jpg";
}else if($topserver['gamekey'] == "csgo"){
    $topserver['mapimg'] = "https://image.gametracker.com/images/maps/160x120/csgo/" . strtolower($topserver['map']) . ".jpg";
}else{
    $topserver['mapimg'] = "https://via.placeholder.com/1600x1200.png?text=No%20image";
}

unset($servers, $players, $a);
