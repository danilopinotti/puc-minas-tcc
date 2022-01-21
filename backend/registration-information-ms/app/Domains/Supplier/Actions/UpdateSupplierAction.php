<?php

namespace App\Domains\Supplier\Actions;

use App\Domains\Supplier\Models\Supplier;
use App\Jobs\SupplierUpdated;

class UpdateSupplierAction
{
    public function execute(Supplier $supplier, array $data): Supplier
    {
        $supplier = tap($supplier)->update($data);
        SupplierUpdated::dispatch($supplier->toArray());

        return $supplier;
    }
}
