<?php

namespace Guava\Search\Search;

use Guava\Search\Filters\Filter;

abstract class Search
{
    protected array $filters = [];

    public function filters(array $filters): static
    {
        $this->filters = [
            ...$this->filters,
            ...$filters,
        ];

        return $this;
    }

    public function filter(Filter | string $filter): static
    {
        $this->filters[] = $filter;

        return $this;
    }

    public function getFilters(): array
    {
        return $this->filters;
    }
}
