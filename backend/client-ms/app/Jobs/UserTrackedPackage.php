<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class UserTrackedPackage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public string $objectId;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $objectId)
    {
        $this->objectId = $objectId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        info('Object Tracked: ' . $this->objectId);
    }
}
