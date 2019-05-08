<?php

use Illuminate\Database\Seeder;

use App\User;

// $ php artisan make:seeder UsersTableSeeder

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'firstname' => 'Jorge Ivan', 
            'lastname' => 'Meza', 
            'email' => 'jimezam@autonoma.edu.co', 
            'password' => Hash::make('hola123')
        ]);
    }
}
