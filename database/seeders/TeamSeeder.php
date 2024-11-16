<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teams')->insert([
            [
                'user_id' => '1',
                'team_name' => 'ABC Choir',
                'total_member' => '40',
                'description' => 'abc choir lorem ipsum',
                'status_pendaftaran' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '2',
                'team_name' => 'BCA Choir',
                'total_member' => '40',
                'description' => 'BCA choir lorem ipsum',
                'status_pendaftaran' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '3',
                'team_name' => 'BCA Choir',
                'total_member' => '40',
                'description' => 'abc choir lorem ipsum',
                'status_pendaftaran' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
