# Weather API
This PHP class provides a simple interface to retrieve weather data using the OpenWeatherMap API.

## Usage
Create an instance of the Weather class, passing in the latitude and longitude of the location you want to retrieve weather data for, your API key, the units to use, and the language to return the data in:
php

```
$weather = new Weather(42.3601, -71.0589, 'your_api_key_here', 'imperial', 'en');
```
Call the **getWeather method** on the Weather instance to retrieve** an array of weather data**:

```
$data = $weather->getWeather();

if ($data === null) {
    // handle error
} else {
    // do something with data
}
```
