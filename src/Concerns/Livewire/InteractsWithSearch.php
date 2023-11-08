<?php

namespace Guava\Search\Concerns\Livewire;

use Composer\InstalledVersions;
use Exception;
use Livewire\Attributes\Url;

trait InteractsWithSearch
{
    #[Url]
    public array $filters = [];

    public function mountInteractsWithSearch()
    {
        //        if (InstalledVersions::getVersion('livewire/livewire')) {
        //            throw new Exception('This is an optional feature that requires the livewire/livewire package. Please install it to use this feature.');
        //        }
    }

    public function getFiltersFromUrl(): array
    {
        return $this->filters;
    }
}
