<?php

namespace Database\Seeders;

use App\Models\cuenta;
use Illuminate\Database\Seeder;

class CuentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        cuenta::factory(50)->create();
    }
}
