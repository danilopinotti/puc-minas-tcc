<?php

namespace App\Domains\Packages\Actions;

use App\Domains\Packages\Models\Package;
use App\Jobs\UserTrackedPackage;
use Illuminate\Database\Eloquent\Collection;

class GetPackageTracking
{
    public function execute(string $packageCode): ?Collection
    {
        UserTrackedPackage::dispatch($packageCode);

        $package = Package::where('code', $packageCode)
            ->first();

        if (!$package) {
            return null;
        }

        return $package->trackings;
    }
}
