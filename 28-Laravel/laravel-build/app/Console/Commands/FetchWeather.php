<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use App\Models\City;
use App\Models\Weather;

class FetchWeather extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'weather:fetch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch the weather for particular city.';

    public function handle(): void
    {
        $cities = City::all()->toArray();
        foreach ($cities as $city) {
            $weatherDetails = $this->getWeatherDetails($city['city']);
            $DataByCities[] = [
                $city['city'],
                $weatherDetails['main']['temp'],
                $weatherDetails['main']['humidity'],
                $weatherDetails['wind']['speed']
            ];
            Weather::create([
                'city_id' => $city['city_id'],
                'temperature' => $weatherDetails['main']['temp'],
                'humidity' => $weatherDetails['main']['humidity'],
                'pressure' => $weatherDetails['main']['pressure'],
                'wind_speed' => $weatherDetails['wind']['speed'],
                'created_at' => date("Y-m-d H:i:s"),
            ]);
        }
        $this->output->table(['City', 'Temp', 'Humidity', 'Wind'], $DataByCities);
    }

    private function getWeatherDetails($city): array
    {
        $url = sprintf(
            'api.openweathermap.org/data/2.5/weather?q=%s&appid=%s&lang=en&units=metric',
            $city,
            '9f5cfaadae11dd2030bf07aaeac8dc4a'
        );

        $response = Http::get($url);
        if ($response->status() !== Response::HTTP_OK) {
            throw new \Exception("Invalid response: {$response->body()}");
        }

        $decodedResponse = json_decode($response->body(), true);
        $decodedResponse['main'] = array_map('intval', $decodedResponse['main']);
        $decodedResponse['wind'] = array_map('intval', $decodedResponse['wind']);
        return $decodedResponse;
    }


}
