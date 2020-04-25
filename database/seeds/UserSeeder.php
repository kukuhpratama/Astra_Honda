<?php

use Illuminate\Database\Seeder;
use App\User;

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
            'name' => 'Main Dealer',
            'email' => 'maindealer@gmail.com',
            'password' => Hash::make('password'),
            'jabatan' => 'main_dealer',
            'remember_token' => Str::random(20)
        ]);

        User::create([
            'name' => 'Dealer',
            'email' => 'dealer@gmail.com',
            'password' => Hash::make('password'),
            'jabatan' => 'dealer',
            'remember_token' => Str::random(20)
        ]);
    }
}
