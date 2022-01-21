<?php

namespace Database\Seeders;

use App\Domains\Packages\Models\Package;
use Database\Factories\PackageTrackFactory;
use Illuminate\Database\Seeder;

class PackagesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $packages = Package::factory(10)->create();
        foreach ($packages as $package) {
            $isDelivered = (bool)random_int(0, 1);
            $this->addPackageTrackings($package, $isDelivered);
            $package->update(['is_delivered' => $isDelivered]);
        }

        dump($packages->pluck('code'));
    }

    private function addPackageTrackings(Package $package, bool $isDelivered)
    {
        $trackings = $package->trackings();
        $trackingFactory = PackageTrackFactory::new();

        $trackings->create([
            'status' => 'Pacote recebido pelo Centro de Distribuição.'
        ]);

        if (random_int(0, 3) == 3) {
            return;
        }

        $trackingFactory->forPackage($package)
            ->count(random_int(1, 10))
            ->create();

        if ($isDelivered) {
            $trackings->create([
                'status' => 'Pacote saiu para entrega.'
            ]);

            $trackings->create([
                'status' => 'Pacote Entregue ao destinatário.'
            ]);
        }

    }
}
