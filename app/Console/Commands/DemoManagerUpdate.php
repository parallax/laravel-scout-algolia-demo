<?php

namespace App\Console\Commands;

use App\Manager;
use Illuminate\Console\Command;

class DemoManagerUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:manager-update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'DEMO: Update Manager';

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
        $manager = Manager::first();
        $this->info('Updating Manger: ' . $manager->name);

        $update = $this->ask('Enter new manager name');
        $manager->name = $update;
        $manager->save();
        $this->info('New Manager Name: ' . $manager->name);
    }
}
