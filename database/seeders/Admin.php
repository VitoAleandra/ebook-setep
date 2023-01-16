<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'Admin',
            'email' => 'stevani@gmail.com',
            'nohp' => '085888888',
            'alamat' => 'Bali',
            'password' => bcrypt('12345678'),
        ]);   
    }
}
