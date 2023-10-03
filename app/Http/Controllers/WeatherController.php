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

    // 'getUserCity' method: Returns the user's city.
    public function getUserCity()
    {
        $userIpAddress = request()->ip();
        $accessToken = env('IPINFO_ACCESS_TOKEN');

        $response = Http::get("https://ipinfo.io/$userIpAddress?token=$accessToken");

        if ($response->successful()) {
            $userLocationData = $response->json();

            if (array_key_exists('city', $userLocationData)) {
                $userCity = $userLocationData['city'];
                return $userCity;
            }
        }
        return 'Charleroi';
    }

    // 'getWeather' method: Returns the weather data.
    public function getWeather()
    {
        $city = $this->getUserCity();
        $weatherApiKey = env('WEATHER_API_KEY');


        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$weatherApiKey&units=metric");
        $weatherData = $response->json();

        if (array_key_exists('name', $weatherData)) {
            $resultWeatherData = [
                'city' => $weatherData['name'],
                'temperature' => $weatherData['main']['temp'],
                'description' => $weatherData['weather'][0]['description'],
            ];
        } else {
            $resultWeatherData = [];
        }

        return $resultWeatherData;
    }
}
