<?php

class Weather{
    
    private string $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getWeather(float $latitude, float $longitude, string $units='metric'): array{
        
    }
}