<?php

namespace Guava\Search\Search;

use Closure;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Pipeline;

class EloquentSearch extends Search
{

    public function __construct(
        protected Builder $query,
        protected array   $queryFilters = [],
    )
    {
//        dd(request()->route()->controller);
    }

    public function getQueryFilter(string $key, $default = null) {
        return Arr::get($this->queryFilters, $key, $default);
    }

    public function query(Closure|Builder $query): static
    {
        if ($query instanceof Closure) {
            $this->query = $query($this->query);
        } else {
            $this->query = $query;
        }

        return $this;
    }

    public function getQuery(): Builder
    {
        return Pipeline::send($this)
            ->through([
                ...$this->getFilters(),
            ])
            ->then(fn(EloquentSearch $search) => $search->query);
    }

    public function getCollection(): Collection
    {
        return $this->getQuery()->get();
    }

    public static function make(
        string|Builder $query,
        array          $queryFilters = [],
    ): static
    {
        if (is_string($query)) {
            $query = $query::query();
        }

        return app(static::class, [
            'query' => $query,
            'queryFilters' => $queryFilters,
        ]);
    }

}
