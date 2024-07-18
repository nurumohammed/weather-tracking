<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Events\weatherEvent;

class WeatherController extends Controller
{
    public function getWeatherData(Request $request){
        event(new weatherEvent($request->all()));
    }
}
