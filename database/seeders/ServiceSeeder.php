<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        Service::insert([

            [
                'title' => 'Cyber Security',
                'description' => 'Protecting digital systems and networks from cyber threats.',
                'icon' => 'shield',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Cloud Solutions',
                'description' => 'Secure and scalable cloud infrastructure for businesses.',
                'icon' => 'cloud',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Network Security',
                'description' => 'Advanced protection and monitoring for enterprise networks.',
                'icon' => 'wifi',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'IT Consulting',
                'description' => 'Strategic technology consulting for digital transformation.',
                'icon' => 'cpu',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Data Protection',
                'description' => 'Securing sensitive business data and customer information.',
                'icon' => 'database',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}