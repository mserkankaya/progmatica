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
            'status'=>1,
        ]);
        Service::create([
            'title'=>"E-Ticaret",
            'status'=>1,
        ]);
        Service::create([
            'title'=>"Mobil",
            'status'=>1,
        ]);
        Service::create([
            'title'=>"Masaüstü",
            'status'=>1,
        ]);
        Service::create([
            'title'=>"ERP",
            'status'=>1,
        ]);
        Service::create([
            'title'=>"Yazılım",
            'status'=>1,
        ]);
    }
}
