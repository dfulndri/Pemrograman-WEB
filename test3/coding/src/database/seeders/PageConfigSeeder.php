<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PageConfig;

class PageConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PageConfig::create([
            'image' => 'front/images/about-us.png',
            'name' => 'Defia Ulandari',
            'description' => 'Undergraduate Student at Universitas Esa Unggul, Jakarta, Indonesia. Passionate about web development and open source.',
        ]);
    }
}