<?php

namespace App\Domains\Supplier\Actions;

use App\Domains\Supplier\Models\Supplier;

class UpdateSupplierAction
{
    public function execute(Supplier $supplier, array $data): Supplier
    {
        return tap($supplier)->update($data);
    }
}
