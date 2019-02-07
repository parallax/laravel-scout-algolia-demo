<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Blog extends Model
{
    use Searchable;

    protected $fillable = ['title', 'content'];
}
