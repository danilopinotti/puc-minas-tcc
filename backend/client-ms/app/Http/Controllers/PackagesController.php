<?php

namespace App\Http\Controllers;

use App\Domains\Packages\Actions\GetPackageTracking;
use App\Domains\Packages\Models\Package;
use App\Http\Resources\PackageResource;
use App\Http\Resources\PackageTrackResource;

class PackagesController
{
    public function index()
    {
        $packages = Package::paginate();
        $packages->withPath(request()->header('x-forwarded-path'));
        return PackageResource::collection($packages);
    }
    public function track(string $packageCode)
    {
        $trackEntries = app(GetPackageTracking::class)
            ->execute($packageCode);

        if (!$trackEntries || $trackEntries->isEmpty()) {
            return response()->json([
                'packageCode' => $packageCode,
                'message' => 'Package not found'
            ], 404);
        }

        return [
            'packageCode' => $packageCode,
            'track' => PackageTrackResource::collection($trackEntries),
        ];
    }
}
