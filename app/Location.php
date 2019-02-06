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
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        // Call manager relationship
        $this->manager;

        $array = $this->toArray();

        // Applies Scout Extended default transformations:
        $array = $this->transform($array);

        // Add an extra attribute:
        //$array['created_month'] = date('F', strtotime($array['created_at']));

        // Add relational data into index
//        $array['manager_name'] = $this->manager->name;

        return $array;
    }
}
