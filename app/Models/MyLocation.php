<?php

namespace App\Models;

use App\Models\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MyLocation extends Model
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

    public function getRelation($relation)
    {
        if ($relation === 'location') {
            return $this->getLocationRelation();
        }

        return parent::getRelation($relation);
    }

    protected function getLocationRelation()
    {
        $locations = Location::getLocation();
        $location = $locations->firstWhere('id', $this->location_id);

        if ($location) {
            return $location;
        }

        return new Location(); // Return an empty Location instance if not found
    }

    public static function with($relations)
    {
        if (is_array($relations) && in_array('location', $relations)) {
            $locations = Location::getLocation();
            $instances = parent::with([])->get();

            foreach ($instances as $instance) {
                $location = $locations->firstWhere('id', $instance->location_id);
                if ($location) {
                    $instance->setRelation('location', $location);
                } else {
                    $instance->setRelation('location', new Location());
                }
            }

            return $instances;
        }

        return parent::with($relations)->get();
    }
}
