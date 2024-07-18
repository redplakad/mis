<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class ClearAllCommand extends Command
{
    protected $signature = 'clear:all';
    protected $description = 'Clears all caches, views, config, routes, and more.';

    public function handle()
    {
        $this->call('config:clear');
        $this->call('cache:clear');
        $this->call('route:clear');
        $this->call('view:clear');
        $this->call('clear-compiled');

        $this->info('All caches, views, config, routes, and more have been cleared!');
    }
}
