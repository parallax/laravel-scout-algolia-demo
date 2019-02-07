<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Location extends Model
{
    use Searchable;

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'address', 'description', 'latitude', 'longitude'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function manager()
    {
        return $this->hasOne('App\Manager', 'location_id');
    }


    /**
     * @return mixed
     */
    public function shouldBeSearchable()
    {
        return true;
        //return $this->isPublished();
    }

    /**
     * @return string
     */
    public function searchableAs()
    {
        return config('scout.prefix') . 'locations';
    }


    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        // Call manager relationship
//        $this->manager;

        $array = $this->toArray();

        // Applies Scout Extended default transformations:
        $array = $this->transform($array);

        // Add an extra attribute:
//        $array['created_month'] = date('F', strtotime($array['created_at']));

        // Add relational data into index
//        $array['manager_name'] = $this->manager->name;

        // Configure Geo Data
//        $array['_geoloc'] = [
//            'lat' => $array['latitude'],
//            'lng' => $array['longitude']
//        ];

        return $array;
    }
}
