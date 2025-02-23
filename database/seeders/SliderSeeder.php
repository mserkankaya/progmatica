<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create([
            'title'=>"Yenilikçi Çözümlerle İşinizi Büyütün",
            'description'=>"Sizlere en modern yazılım çözümleri sunarak iş süreçlerinizi hızlandırın ve verimliliğinizi artırın. Yaratıcı ve etkili çözümlerimizle başarıyı yakalayın.",
            'imageUrl'=>"user/images/slider-img.jpg",
        ]);
        Slider::create([
            'title'=>"Müşteri İhtiyaçlarına Özel Tasarımlar",
            'description'=>"Her projeyi müşterilerimizin ihtiyaçlarına göre özelleştiriyor ve onlara en uygun çözümleri sunuyoruz. Estetik ve işlevsel tasarımlarımızla rakiplerinizden öne çıkın.",
            'imageUrl'=>"user/images/slider-img.jpg",
        ]);
        Slider::create([
            'title'=>"7/24 Güçlü Destek Hizmeti",
            'description'=>"Her zaman yanınızdayız. Herhangi bir teknik sorunla karşılaştığınızda, hızlı ve etkili destek hizmetimizle her zaman çözüm sağlıyoruz.",
            'imageUrl'=>"user/images/slider-img.jpg",
        ]);
    }
}
