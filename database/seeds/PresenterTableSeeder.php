<?php

use Illuminate\Database\Seeder;

class PresenterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('presenters')->insert([
            'name' => 'Artur de Castro',
            'email' => 'artur@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
