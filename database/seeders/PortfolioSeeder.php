<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio::create([
            "imageUrl" => "https://intersmart.ae/wp-content/uploads/2024/04/The-Essential-Web-Development-Tools-Every-Developer-Should-Know.png",
            'status'=>1,
        ]);
        Portfolio::create([
            "imageUrl" => "https://ultahost.com/blog/wp-content/uploads/2024/06/29-Tools-X-Best-Web-Development-Tools-in-2024-800x451.png",
            'status'=>1,
        ]);
        Portfolio::create([
            "imageUrl" => "https://blog-edutore-partner.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2021/05/25095458/Profesi-Web-Developer_626-x-626-px.png",
            'status'=>1,
        ]);
        Portfolio::create([
            "imageUrl" => "https://img.freepik.com/free-vector/business-monitor-elements-set_24877-56191.jpg",
            'status'=>1,
        ]);
    }
}
