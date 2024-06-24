<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        Karyawan::create([
            'name'=> 'Farrel Favian',
            'users_id' => 3,
            'email' =>'karyawan@gmail.com',
        ]);
        // $user->assignRole('writer','admin')
    }
}
