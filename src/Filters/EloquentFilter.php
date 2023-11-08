<?php

namespace Guava\Search\Filters;

use Closure;
use Guava\Search\Search\EloquentSearch;
use Guava\Search\Search\Search;

abstract class EloquentFilter extends Filter
{

    public abstract function __invoke(EloquentSearch|Search $search, Closure $next);
}
