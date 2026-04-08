<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Template;

class TemplateSeeder extends Seeder
{
    public function run(): void
    {
        $templates = [
            [
                'name' => 'Blossom Romance',
                'slug' => 'theme-1',
                'preview_image' => 'assets/image/portfolio1.png',
                'description' => 'Desain romantis dengan sentuhan floral yang lembut dan elegan',
            ],
            [
                'name' => 'Starry Night',
                'slug' => 'theme-2',
                'preview_image' => 'assets/image/portfolio2.png',
                'description' => 'Tema malam berbintang yang magis dan penuh pesona',
            ],
            [
                'name' => 'Golden Luxury',
                'slug' => 'theme-3',
                'preview_image' => 'assets/image/portfolio3.png',
                'description' => 'Kemewahan klasik dengan aksen emas yang memukau',
            ],
            [
                'name' => 'Emerald Elegance',
                'slug' => 'theme-4',
                'preview_image' => 'assets/image/hero.png',
                'description' => 'Elegansi hijau zamrud yang menenangkan dan mewah',
            ],
            [
                'name' => 'Adat Sunda & Betawi Luxury',
                'slug' => 'theme-5',
                'preview_image' => 'assets/image/theme-5-cover.png',
                'description' => 'Eksplorasi kemewahan adat Sunda dan Betawi dalam desain premium yang kaya akan ornamen budaya',
                'is_active' => true,
            ],
            [
                'name' => 'Javanese Wayang Culture',
                'slug' => 'theme-6',
                'preview_image' => 'assets/image/theme-6-wayang.png',
                'description' => 'Kemewahan budaya Jawa dengan sentuhan Wayang Kulit yang artistik dan premium',
                'is_active' => true,
            ],
        ];

        foreach ($templates as $template) {
            Template::updateOrCreate(['slug' => $template['slug']], $template);
        }
    }
}
