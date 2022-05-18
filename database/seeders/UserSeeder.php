<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make(12345678)
        ]);

        $admin->attachRole('admin');

        $kadis = User::create([
            'name' => 'Kadis',
            'email' => 'kadis@gmail.com',
            'password' => Hash::make(12345678)
        ]);
        
        $kadis->attachRole('kadis');
    }
}
