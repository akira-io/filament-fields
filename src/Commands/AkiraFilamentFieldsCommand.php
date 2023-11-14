<?php

namespace Akira\AkiraFilamentFields\Commands;

use Illuminate\Console\Command;

class AkiraFilamentFieldsCommand extends Command
{
    public $signature = 'akira-filament-fields';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
