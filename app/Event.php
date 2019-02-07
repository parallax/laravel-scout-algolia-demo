<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Event extends Model
{
    use Searchable;

    protected $fillable = ['title', 'content', 'event_start', 'event_end'];
}
