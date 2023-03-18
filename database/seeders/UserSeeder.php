<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Main System User
        $mainUserOne = \App\Models\User::create([
           'first_name' => 'Collins',
           'last_name' => 'Muli',
           'email' => 'Collins@domain.com',
            'password' => Hash::make('password'),
        ]);

        $mainUserTwo = \App\Models\User::create([
            'first_name' => 'Shadrack',
            'last_name' => 'Ongera',
            'email' => 'Shadrack@domain.com',
            'password' => Hash::make('password'),
        ]);

    }
}
