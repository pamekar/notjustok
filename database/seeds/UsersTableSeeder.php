<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //$faker = \Faker\Factory::create();
        \App\User::create([
            'name'              => 'user',
            'email'             => 'user@site.com',
            'password'          => bcrypt('password'),
            'remember_token'    => \Illuminate\Support\Str::random(60),
            'email_verified_at' => date('Y-m-d')
        ]);
    }
}
