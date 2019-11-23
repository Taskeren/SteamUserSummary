<?php

header('Content-Type: application/json');

$url = "https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v2/?key=8ECB5619637B397611CBE9E3A7223D1C&steamids=";
$steamids = $_GET["steamids"];

if(empty($steamids)) {
    print("'steamids' cannot be null!");
    die();
}

$tofetch = $url.$steamids;
$content = file_get_contents($tofetch);
print_r($content);