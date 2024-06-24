<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $admin= User::create([
        //     'name'=> 'hrd',
        //     'email' =>'admin@gmail.com',
        //     'password' => bcrypt('12345678')
        // ]);
        // $admin->assignRole('admin');

        $superadmin = User::create([
            'name'=> 'direktur',
            'email' =>'superadmin@gmail.com',
            'email_verified_at' =>  now(),
            'password' => bcrypt('12345678')
        ]);
        $superadmin->assignRole('superadmin');

        $user = User::create([
            'name'=> 'karyawan',
            'email' =>'karyawan@gmail.com',
            'email_verified_at' =>  now(),
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole('user');

    }
}
