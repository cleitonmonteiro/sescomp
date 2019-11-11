<?php

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activities = Event::create([
            'name' => 'Sescomp',
            'description' => 'ola essa e a 4 sescomp',
            'begin_date' => now(),
            'end_date' => now()
        ]);
    }
}
