<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class Location extends Model
{
    use HasFactory;

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

    // Override newQuery to return an empty query builder
    /*public function newQuery()
    {
        return new Builder(new \Illuminate\Database\Query\Builder(
            \Illuminate\Database\Connection::resolveConnection($this->getConnectionName())
        ));
    }*/
}
