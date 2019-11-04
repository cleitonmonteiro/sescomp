<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Cleiton Monteiro',
            'email' => 'cleiton@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
