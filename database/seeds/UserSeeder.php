<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'lname' => 'Coscos',
                'fname' => 'John Ritchie',
                'address' => 'Pooc, Oriental Tubigon, Bohol',
                'phone' => '0909.023.567',
                'email' => 'johnmanoy@yahoo.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname' => 'Coscos',
                'fname' => 'Joseph Noel',
                'address' => 'Pooc, Oriental Tubigon, Bohol',
                'phone' => '0936.367.625',
                'email' => 'josepnoe@yahoo.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname' => 'Remotcha',
                'fname' => 'Princess Diane',
                'address' => 'Matabao, Tubigon, Bohol',
                'phone' => '0908.615.4571',
                'email' => 'princessa@ygmail.com',
                'password' => bcrypt('password123')
            ]
        ];

        foreach($data as $user){
            \App\User::create($user);
        }
    }
}
