<?php

namespace Database\Seeders;

use App\Models\Plan;
use App\Models\Tenant;
use Illuminate\Database\Seeder;

class TenantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plan = Plan::first();

        $plan->tenants()->create([
            'cnpj' => '234543543223',
            'name' => 'SuperTI',
            'url' => 'superti',
            'email' => 'superti@gmail.com',
        ]);
    }
}
