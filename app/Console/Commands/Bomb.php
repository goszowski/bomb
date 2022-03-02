<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Pool;

class Bomb extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bomb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Sending...');

        $responses = Http::pool(function (Pool $pool) {
            foreach (config('bomb.destinations') as $destination) {
                for ($i=0; $i<config('bomb.theards'); $i++) {
                    $method = $destination['method'];
                    $pool->timeout(config('bomb.timeout'))->{$method}($destination['url']);
                }
            }
        });

        $this->info('Requests sent: ' . count($responses));

        return 0;
    }
}
