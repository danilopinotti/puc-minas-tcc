<?php

namespace App\Domains\Freight\Actions;

use App\Jobs\UserCalculatedFreight;

class CalculatePrice
{
    public function execute(array $packageData): float
    {
        UserCalculatedFreight::dispatch($packageData);

        $weightG = $packageData['weightG'];
        $heightCm = $packageData['heightCm'];
        $widthCm = $packageData['widthCm'];
        $lengthCm = $packageData['lengthCm'];

        return round(($weightG*$heightCm*$widthCm*$lengthCm)/100000*0.54, 2);

        return 0;
    }
}
