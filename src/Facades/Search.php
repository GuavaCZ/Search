<?php

namespace Guava\Search\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Guava\Search\Search\Search
 */
class Search extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Guava\Search\Search\Search::class;
    }
}
