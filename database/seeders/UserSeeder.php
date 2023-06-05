<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Mahmoud Electron',
            'email' => 'mahmoud@icon-creations.com',
            'password' => bcrypt('password'),
        ]);
    }
}
