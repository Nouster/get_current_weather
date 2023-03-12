<?php

function displayWeatherIcon($forecast){
    
    switch($forecast){
        
        case str_contains($forecast['description'], "couvert"):
            echo  $forecast['description'] . ' ☁️';
            break;

        case str_contains($forecast['description'], "légère pluie"):
            echo  $forecast['description'] . ' 🌧️';
            break;
        case str_contains($forecast['description'], "nuageux"):
            echo  $forecast['description'] . ' 🌥️';
            break;
        case str_contains($forecast['description'], "ensoleillé"):
            echo  $forecast['description'] . ' 🌤️';
            break;
        default: echo ['description'];
            }
        }