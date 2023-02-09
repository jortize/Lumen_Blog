<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::create([
            'name' => 'José Eduardo Ortiz Espinoza',
            'email' => 'eduardoortiz637@gmail.com',
            'password' => Hash::make('Spiderman1992')
        ]);
        User::factory(50)->create();
    }
}
