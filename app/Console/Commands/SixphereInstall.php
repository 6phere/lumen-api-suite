<?php

namespace App\Console\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;

class SixphereInstall extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'sixphere:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Install application";

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
      $this->call('migrate');
      $this->call('passport:install');
      $this->call('db:seed');
      $this->call('swagger-lume:generate');
    }
}
