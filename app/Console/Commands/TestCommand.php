<?php

namespace App\Console\Commands;

use App\Models\Category;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'my:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            Category::create([
                // 'name'=>'Fruits',
                'slug'=>'fruit'
            ]);
            Log::info("working");
            //code...
        } catch (\Exception $e) {
                Log::error('Error creating category: '.$e->getMessage());
        }
    }
}
