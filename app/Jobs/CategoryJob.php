<?php

namespace App\Jobs;

use App\Models\Category;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class CategoryJob implements ShouldQueue
{
    // use Queueable,Dispatchable;
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            
            Category::create([
                'name'=>'Fruits',
                'slug'=>'fruit'
            ]);
            Log::info("working");
            //code...
        } catch (\Exception $e) {
                Log::error('Error creating category: '.$e->getMessage());
        }
       
        // Log::debug("working");
    }
}
