<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function getWeather()
    {
        $apiKey = '7182f28fb9f67d1ca1e56afe394910e6';
        $city = 'Yogyakarta'; // Anda bisa menggantinya dengan logika untuk mendapatkan kota pengguna

        $response = Http::get("http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric");

        if ($response->successful()) {
            $weatherData = $response->json();
            return [
                'temperature' => $weatherData['main']['temp'],
                'description' => $weatherData['weather'][0]['description'],
            ];
        }

        return null;
    }
}
