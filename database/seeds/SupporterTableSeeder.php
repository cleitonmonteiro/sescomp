<?php

use Illuminate\Database\Seeder;

class SupporterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supporters')->insert([
            'name' => 'heverson',
            'email' => 'herverson@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
