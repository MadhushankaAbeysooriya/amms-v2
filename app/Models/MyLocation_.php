<?php

namespace App\Models;

use App\Models\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MyLocation_ extends Model
{
    use HasFactory, softDeletes;

    protected $connection = 'mysql';
    protected $table = 'my_locations';
    protected $fillable = [
        'id',
        'location_id',
    ];


    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id', 'id');
    }
}
