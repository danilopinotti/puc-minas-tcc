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

        $md5Route = md5($packageData['origin'] . $packageData['destination']);
        $routeFactor = preg_replace('/[^0-9.]+/', '', $md5Route)%100/100 + 1;

        $price = round(($weightG*$heightCm*$widthCm*$lengthCm)/100000*0.20*$routeFactor, 2);

        if ($price < 10) {
            return 10 + $price;
        }

        return $price;
    }
}
