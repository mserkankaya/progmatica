<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'title'=>"Progmatica Hakkında" ,
            'description'=>"Progmatica, modern ve yenilikçi yazılım çözümleriyle işletmelerin dijital dünyada güçlü bir yer edinmesini sağlamak amacıyla kurulmuştur. Web ve mobil geliştirme, e-ticaret çözümleri, kurumsal yazılım hizmetleri ve SEO gibi alanlarda uzman ekibimizle müşterilerimize en iyi hizmeti sunuyoruz. Teknolojiyi yakından takip ederek, her projeye özel çözümler üretiyoruz.",
            'status'=>1,
        ]);
    }
}
