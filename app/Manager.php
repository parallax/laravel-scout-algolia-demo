<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name', 'location_id'
    ];

    /**
     * @var array
     */
    protected $touches = ['location'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function location()
    {
        return $this->belongsTo('App\Location', 'location_id');
    }
}
