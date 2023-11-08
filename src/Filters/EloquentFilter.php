<?php

namespace Guava\Search\Filters;

use Closure;
use Guava\Search\Search\EloquentSearch;
use Guava\Search\Search\Search;

abstract class EloquentFilter extends Filter
{
    abstract public function __invoke(EloquentSearch | Search $search, Closure $next);
}
