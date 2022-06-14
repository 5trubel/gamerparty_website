<?php
require __DIR__ . '/sq/bootstrap.php';
use xPaw\SourceQuery\SourceQuery;
$query = new SourceQuery();

//Define all avaible servers
$servers = array("ttt" => "172.31.0.1:27035","ins" => "172.31.0.1:27015", "arma" => "192.168.1.7:2303","armavin" => "192.168.1.15:2403");

$status = array();
//Add each server to the $status array 
foreach ($servers as $key => $value){
    try {
        $query->Connect(explode(":",$value)[0],explode(":",$value)[1], 1, SourceQuery::SOURCE);
        $server = $query->GetInfo();
        $status[$key]["status"] = "Online";
        $status[$key]["name"] = $server['HostName'];
        $game = "";
        if($server['GameID'] == "4000"){$game = "garrysmod";}
        if($server['GameID'] == "107410"){$game = "Arma3";}
        if($server['GameID'] == "222880"){$game = "insurgency";}
        $status[$key]["game"] = $game;
        $status[$key]["players"] = $server['Players'];
        $status[$key]["playersmax"] = $server['MaxPlayers'];
        $status[$key]["map"] = $server['Map'];
    } catch (Exception $e) {
        $status[$key]["status"]="Offline";
        $status[$key]["players"] = -1;
    }
    


}


unset($server, $game);
