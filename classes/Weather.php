<?php

class Weather {
    
    private float $lat;
    private float $lon;
    private string $apiKey;
    private string $units;
    private string $lang;
    

    public function __construct(float $lat, float $long, string $apiKey, string $units, string $lang) 
    {
        $this->lat = $lat;
        $this->lon = $long;
        $this->apiKey = $apiKey;
        $this->units = $units;
        $this->lang = $lang;
    }

    public function getWeather(): ?array

    {
        $resource = curl_init("api.openweathermap.org/data/2.5/forecast?lang=$this->lang&lat=$this->lat&lon=$this->lon&appid=$this->apiKey&units=$this->units");
        curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($resource);
        if(!$data){
            return null ;
        }
        $results = [];
        $data = json_decode($data, true);
        foreach($data['list'] as $day){
            $results[] = [
                'temps' => $day['main']['temp'],
                'description' => $day['weather'][0]['description'],
                'date' => new DateTime('@'. $day['dt']),
            ];
            
    }
    curl_close($resource);
    return $results;
}
    }
