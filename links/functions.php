<?php

// Fonction Check Paramètres dans l'url

function check_params($params) {
    foreach ($params as $param) {
        if (isset($_GET[$param]) && !empty($_GET[$param]) && trim($_GET[$param])) {
            return true;
        }
    }
    return false;
}

$params = ['continent', 'team', 'championship', 'race'];

$at_least_one = check_params($params);
// -------------------------------------------



// Fonction UpperCase Nom PRENOM

function uppercase($name) {
    $words = explode(' ', $name); echo ucwords($words[0]) . ' ' . mb_strtoupper($words[1]);
}
// ---------------------------------------------



// Fonction Titre Page

$teamName = $_GET['team'] ?? null;
$continentName = $_GET['continent'] ?? null;
$championshipName = $_GET['championship'] ?? null;
$raceName = $_GET['race'] ?? null;

$pageTitle = 'F1 Statistics';
        
foreach ($teams as $team) {
    if ($team['name'] === $teamName) {
        $pageTitle = $team['name'];
        break;
    }
}

foreach ($continents as $continent) {
    if ($continent['name'] === $continentName) {
        $pageTitle = $continent['name'];
        break;
    }
}

foreach ($championships as $championship) {
    if ($championship['name'] === $championshipName) {
        $pageTitle = $championship['name'];
        break;
    }
}

foreach ($races as $race) {
    if ($race['race_name'] === $raceName) {
        $pageTitle = $race['race_name'];
        break;
    }
}
// -------------------------------------------



// Fonction Get Drivers By Team

function getDriversByTeam($teamName, $members) {
    $drivers = [];
    foreach ($members as $member) {
        if ($member['team'] === $teamName && $member['role'] === 'driver') {
            $drivers[] = $member;
        }
    }
    return $drivers;
}

$team = isset($_GET['team']) ? $_GET['team'] : $team;

$drivers = getDriversByTeam($team, $teamsMembers);
// -------------------------------------------------------



// Fonction Get Races By Continent

function getRacesByContinent($continentName, $races) {
    $courses = [];
    foreach ($races as $race) {
        if ($race['continent'] === $continentName) {
            $courses[] = $race;
        }
    }
    return $courses;
}
// ------------------------------------------------------------
?>