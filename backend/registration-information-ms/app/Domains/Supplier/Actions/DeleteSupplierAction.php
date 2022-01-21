<?php

namespace App\Domains\Supplier\Actions;

use App\Domains\Supplier\Models\Supplier;
use App\Jobs\SupplierDeleted;

class DeleteSupplierAction
{
    public function execute(Supplier $supplier)
    {
        $success = $supplier->delete();
        SupplierDeleted::dispatch($supplier->toArray());
        return $success;
    }
}
