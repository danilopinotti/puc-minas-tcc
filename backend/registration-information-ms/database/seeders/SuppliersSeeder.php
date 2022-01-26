<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\SupplierFactory;
use Illuminate\Database\Seeder;

class SuppliersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       SupplierFactory::new()->count(10)->create();
    }
}
