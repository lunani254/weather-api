<?php

use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;

Route::get('/geocode/{city}', [WeatherController::class, 'geocode']);
Route::get('/weather/{lat}/{lon}', [WeatherController::class, 'getCurrentWeather']);
Route::get('/forecast/{lat}/{lon}', [WeatherController::class, 'getForecast']);