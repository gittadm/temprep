<?php

namespace App\Console\Commands;

use App\Models\Car;
use App\Models\User;
use Illuminate\Console\Command;

class DeleteSoftBooks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:books';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete soft deleted books';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $count = (int) $this->ask('Input count of books:');

        if ($count <= 0) {
            $this->error('Invalid count');
            return Command::SUCCESS;
        }

        $this->line("Process...");

        $this->check();

        Car::onlyTrashed()->delete();

        $this->info("Done");

        $password = $this->secret('What is the password?');

        if ($this->confirm('Do you wish to continue?')) {
            $this->line('yes');
        }

        $this->table(
            ['Name', 'Email'],
            User::all(['name', 'email'])->toArray()
        );

        info($count);

        return Command::SUCCESS;
    }

    private function check()
    {
        // ..
    }
}
