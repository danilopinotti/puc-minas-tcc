<?php

namespace App\Domains\Supplier\Actions;

use App\Domains\Supplier\Models\Supplier;

class CreateSupplierAction
{
    public function execute(array $data): Supplier
    {
        return Supplier::create($data);
    }
}
