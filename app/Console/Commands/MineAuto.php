<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Drill;

class MineAuto extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mine';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Do one cycle of mining';

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
     * @return mixed
     */
    public function handle()
    {
        $drills = Drill::first();
        $inventory = $drills->user->inventory;
        $inventory->ogeum += 10;
        $inventory->save();
        $resource = $drills->well->resource;
        $resource->amount -= 10;
        $resource->save();

        $this->info('... drilling...');
    }
}
