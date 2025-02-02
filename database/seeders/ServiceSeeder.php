<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $services = [
            ['name' => 'General Maintenance', 'description' => 'Breakdown services', 'price' => 150.00],
            ['name' => 'Emergency Support', 'description' => 'Emergency Repairs', 'price' => 200.00],
            ['name' => 'Routine Check', 'description' => 'Log Book Servicing', 'price' => 180.00],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
