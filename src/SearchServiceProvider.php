<?php

namespace Guava\Search;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Guava\Search\Commands\SearchCommand;

class SearchServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('search')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_search_table')
            ->hasCommand(SearchCommand::class)
        ;
    }
}
