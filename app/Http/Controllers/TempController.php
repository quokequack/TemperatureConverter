<?php

namespace App\Http\Controllers;

use App\Models\TemperatureConversion;
use Illuminate\Http\Request;

class TempController extends Controller
{
    public function index(){
        return view("converter.converter");
    }
    public function temperature(){
        $tempConversion = new TemperatureConversion();
        $conversion = $tempConversion->temperature();
        return view('converter.result', ['result'=>$conversion]);
    }
}
