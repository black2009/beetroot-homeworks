<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWetherCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weather_cities', function (Blueprint $table) {
            $table->id('record_id');
            $table->foreignId('city_id')->constrained();;
            $table->foreign('city_id')->references('city_id')->on('cities');
            $table->integer('temperature');
            $table->integer('humidity');
            $table->integer('pressure');
            $table->integer('wind_speed');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wether_cities');
    }
}
