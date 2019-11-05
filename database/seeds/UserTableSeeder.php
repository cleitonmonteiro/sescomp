<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'mateus',
            'email' => 'mateus@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
