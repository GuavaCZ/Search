<?php

namespace Guava\Search\Filters;

use Closure;
use Guava\Search\Search\CollectionSearch;
use Guava\Search\Search\Search;

abstract class CollectionFilter extends Filter
{
    abstract public function __invoke(CollectionSearch | Search $search, Closure $next);
}
