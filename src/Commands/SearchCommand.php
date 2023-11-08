<?php

namespace Guava\Search\Commands;

use Illuminate\Console\Command;

class SearchCommand extends Command
{
    public $signature = 'search';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
