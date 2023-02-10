<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemperatureConversion extends Model
{
    use HasFactory;
    public function temperature(){
        $temp = $_GET['temperature'];
        $scale = $_GET['scale'];

        switch($scale){
            case 'fahrenheit':
                $temp = $temp * 1.8 + 32;
                break;
            case 'kelvin':
                $temp = $temp + 273.15;
                break;
            default:
                $temp = $temp * 1.8 + 32;
                break;
        }
        return $temp;
    }
}
