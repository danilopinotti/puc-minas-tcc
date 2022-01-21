<?php

namespace App\Domains\Supplier\Actions;

use App\Domains\Supplier\Models\Supplier;
use App\Jobs\SupplierCreated;

class CreateSupplierAction
{
    public function execute(array $data): Supplier
    {
        $supplier = Supplier::create($data);
        SupplierCreated::dispatch($supplier->toArray());
        
        return $supplier;
    }
}
