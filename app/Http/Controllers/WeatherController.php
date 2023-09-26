<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    // 'index' method: Displays the weather data.
    public function index()
    {
        $weatherData = $this->getWeather();

        return view('layouts.app', compact('weatherData'));
    }


    // 'getWeather' method: Returns the weather data.
    public function getWeather()
    {
        $weatherApiKey = env('WEATHER_API_KEY');
        $city = 'Charleroi';

        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$weatherApiKey&units=metric");
        $weatherData = $response->json();

        $resultWeatherData = [
            'city' => $weatherData['name'],
            'temperature' => $weatherData['main']['temp'],
            'icon' => $weatherData['weather'][0]['icon']
        ];

        return $resultWeatherData;
    }
}
