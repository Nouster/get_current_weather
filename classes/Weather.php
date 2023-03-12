<?php

class Weather {
    
    private float $lat;
    private float $lon;
    private string $apiKey;
    private string $units;
    

    public function __construct(float $lat, float $long, string $apiKey, string $units)
    {
        $this->lat = $lat;
        $this->lon = $long;
        $this->apiKey = $apiKey;
        $this->units = $units;
    }

    public function getWeather(): ?array
    {
        $curl = curl_init("api.openweathermap.org/data/2.5/forecast?lat=$this->lat&lon=$this->lon&appid=$this->apiKey&units=$this->units");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($curl);
        if(!$data){
            return null ;
        }
        $results = [];
        $data = json_decode($data, true);
        foreach($data['list'] as $day){
            $results = [
                'temps' => $day['temp']['day'],
                'description' => $day['weather'][0]['description'],
                'date' => $day['dt']
            ];
            var_dump($results);
    }
    return $results;
}
}