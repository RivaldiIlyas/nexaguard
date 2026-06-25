<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        Article::insert([

            [
                'title' => 'Cyber Security Trends 2026',
                'image' => 'article1.jpg',
                'description' => 'Learn about the latest cyber threats and modern security strategies for businesses.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Cloud Security Best Practices',
                'image' => 'article2.jpg',
                'description' => 'Discover how companies secure cloud systems and protect sensitive information.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Protecting Business Data',
                'image' => 'article3.jpg',
                'description' => 'Understand the importance of securing customer and company data from cyber attacks.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}