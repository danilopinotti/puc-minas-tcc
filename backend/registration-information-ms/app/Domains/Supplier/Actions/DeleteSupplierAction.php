<?php

namespace App\Domains\Supplier\Actions;

use App\Domains\Supplier\Models\Supplier;

class DeleteSupplierAction
{
    public function execute(Supplier $supplier)
    {
        return $supplier->delete();
    }
}
