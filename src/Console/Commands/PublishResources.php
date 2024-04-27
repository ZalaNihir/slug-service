<?php

namespace Nihir\SlugService\Console\Commands;

use Illuminate\Console\Command;

class PublishResources extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'slug:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will help you to publish the class in your project.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Publishing resources...');
        $this->call('vendor:publish', [
            '--provider' => \Nihir\SlugService\SlugServiceProvider::class,
            '--tag' => 'slug-service-resources',
        ]);
        $this->info('Resources published successfully.');
    }
}
