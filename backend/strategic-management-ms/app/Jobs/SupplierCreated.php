<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SupplierCreated implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public array $supplierData;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(array $supplierData)
    {
        $this->supplierData = $supplierData;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        info('Supplier Created Processed: ' . json_encode($this->supplierData));
    }
}
