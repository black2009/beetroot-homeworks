<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    protected $table = 'city_weather';
    protected $fillable = ['temperature', 'humidity', 'wind_speed', 'pressure', 'city_id', 'created_at'];
    public $timestamps = false;


}
