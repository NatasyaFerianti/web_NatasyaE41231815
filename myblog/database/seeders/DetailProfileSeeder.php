<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_profile')->insert([
            'user_id' => 1,
            'alamat' => 'Jl. Contoh No. 123',
            'no_hp' => '08123456789',
            'bio' => 'Ini adalah contoh bio',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
