<?php

namespace App\Search;

use Algolia\ScoutExtended\Searchable\Aggregator;
use App\Blog;
use App\Event;

class News extends Aggregator
{
    /**
     * The names of the models that should be aggregated.
     *
     * @var string[]
     */
    protected $models = [
        Blog::class,
        Event::class
    ];
}
