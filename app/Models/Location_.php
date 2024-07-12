<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class Location_ extends Model
{
    use HasFactory;

    protected $connection = 'locations';
    protected $table = 'locations';
    protected $fillable = [
        'id',
        'name',
        'abb',
        'type',
        'address',
        'phone',
        'micro',
        'order',
    ];

    /*public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        // Ensure location data is fetched and populated
        $this->getLocation();
    }*/


    public static function getLocation()
    {
        $client = new Client([
            'verify' => false, // Disable SSL verification
        ]);

        $response = $client->get('https://str.army.lk/api/get_establishments/?str-token=1189d8dde195a36a9c4a721a390a74e6'); // Replace with your API URL

        if ($response->getStatusCode() == 200) {
            $data = json_decode($response->getBody(), true);

            // Transform the API response into a collection of ApiData instances
            $apiDataCollection = collect($data)->map(function ($item) {
                return new static($item);
            });

            return $apiDataCollection;
        }

        return collect(); // Return an empty collection in case of failure
    }
}
