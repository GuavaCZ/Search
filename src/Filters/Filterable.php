<?php

namespace Guava\Search\Filters;

use Closure;
use Guava\Search\Search\Search;

interface Filterable
{
    public function __invoke(Search $search, Closure $next);
}
