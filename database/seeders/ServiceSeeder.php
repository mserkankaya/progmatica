<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'title'=>"Web",
        ]);
        Service::create([
            'title'=>"E-Ticaret",
        ]);
        Service::create([
            'title'=>"Mobil",
        ]);
        Service::create([
            'title'=>"Masaüstü",
        ]);
        Service::create([
            'title'=>"ERP",
        ]);
        Service::create([
            'title'=>"Yazılım",
        ]);
    }
}
