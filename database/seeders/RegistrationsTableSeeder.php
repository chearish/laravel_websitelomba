<?php

namespace Database\Seeders;

use App\Models\Registration;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RegistrationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Registration::create([
            'registration_date' => now(),
            'registration_status' => 'Pending',
            'payment_proof' => 'example.png',
            'team_id' => 1,
            'category_id' => 1,
        ]);

        Registration::create([
            'registration_date' => now(),
            'registration_status' => 'Pending',
            'payment_proof' => 'example.png',
            'team_id' => 2,
            'category_id' => 1,
        ]);

        Registration::create([
            'registration_date' => now(),
            'registration_status' => 'Pending',
            'payment_proof' => 'example.png',
            'team_id' => 3,
            'category_id' => 1,
        ]);

        
    }
}
