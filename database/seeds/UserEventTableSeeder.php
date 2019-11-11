<?php

use Illuminate\Database\Seeder;

class UserEventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eventUser = DB::table('event_user')->insert([
            'event_id' => 1,
            'user_id' => 1
        ]);

    }
}
