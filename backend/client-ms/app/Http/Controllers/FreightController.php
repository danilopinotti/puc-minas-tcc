<?php

namespace App\Http\Controllers;

use App\Domains\Freight\Actions\CalculatePrice;
use App\Http\Requests\FreightCalculationRequest;

class FreightController
{
    public function calculate(FreightCalculationRequest $request)
    {
        $packageData = $request->validated();
        $freightPrice = app(CalculatePrice::class)
            ->execute($packageData);

        return response()->json([
            'package' => $packageData,
            'price' => $freightPrice,
        ]);
    }
}
