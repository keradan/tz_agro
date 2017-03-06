<?php

use Illuminate\Database\Seeder;
use App\User;

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
	        'name' => 'Vasya', 
	        'email' => 'Vasya@gmail.com', 
            'login' => 'vasya',
            'password' => '123456',
        ]);
        User::create([
	        'name' => 'Petya', 
	        'email' => 'Petya@gmail.com', 
            'login' => 'petya',
            'password' => '123456',
        ]);
    }
}
