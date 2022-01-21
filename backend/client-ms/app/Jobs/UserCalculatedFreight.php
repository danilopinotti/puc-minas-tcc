<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class UserCalculatedFreight implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public array $freightData;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(array $freightData)
    {
        $this->freightData = $freightData;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        info('Freight Calculated: ' . json_encode($this->freightData));
    }
}
