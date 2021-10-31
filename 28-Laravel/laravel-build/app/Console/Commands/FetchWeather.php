<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\Http;

class FetchWeather extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'weather {city}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show Current Weather Data in Chosen City';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Execute the console command.
     *
     * @param $signature
     * @return string
     */
    public function handle()
    {
//    return Command::SUCCESS;
        $city = $this->argument('city');
        $today = date("F j, Y, g:i a");
        $k = '9f5cfaadae11dd2030bf07aaeac8dc4a';
        $this->info("Weather in $city." . PHP_EOL . "Current Weather Data on " . $today . ' (GMT)') . PHP_EOL;
//      print_r(json_decode((Http::get("https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$k")), true));
        $weatherArray = json_decode(
            (Http::get(
                "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$k"
            )),
            true,
            JSON_PRETTY_PRINT,
            JSON_THROW_ON_ERROR
        );
//      print_r($weatherArray);
        $this->info('Longitude: ' . implode(array_column($weatherArray, 'lon'))) . PHP_EOL;
        $this->info('Latitude: ' . implode(array_column($weatherArray, 'lat'))) . PHP_EOL;
        $this->info('Weather main: ' . implode(array_column($weatherArray['weather'], 'main'))) . PHP_EOL;
        $this->info('Weather description: ' . implode(array_column($weatherArray['weather'], 'description'))) . PHP_EOL;
        $this->info('Temperature: ' . implode(array_column($weatherArray, 'temp'))) . PHP_EOL;
        $this->info('Pressure: ' . implode(array_column($weatherArray, 'pressure'))) . PHP_EOL;
        $this->info('Humidity: ' . implode(array_column($weatherArray, 'humidity'))) . PHP_EOL;
        $this->info('Wind speed: ' . implode(array_column($weatherArray, 'speed'))) . PHP_EOL;
    }
}
