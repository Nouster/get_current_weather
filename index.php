<?php
require_once 'layout/header.php';
require_once 'classes/Weather.php';

$weather = new Weather(45.75, 4.85,'12d8a10ed4a8966b8d2f0e60baab934a', 'metric');
$weather->getWeather();

var_dump($weather);

require_once 'layout/footer.php';






