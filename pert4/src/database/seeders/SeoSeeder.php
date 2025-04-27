<?php

namespace Database\Seeders;

use App\Models\Seo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Seo::count() == 0) {
            Seo::create([
                'title' => 'Pemweb',
                'description' => 'Pemrograman Web',
                'keywords' => 'website',
                'canonical_url' => 'http://localhost',
                'robots' => 'index, follow',
                'og_image' => '',
            ]);
        }
    }
}
