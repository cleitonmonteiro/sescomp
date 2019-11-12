<?php

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activities = [[
            'name' => 'palestra cleiton',
            'hours' => 2,
            'event_id' => 1,
            'level' => 'Facil',
            'abstract' => 'kajsdhjkashd',
            'description' => 'asmdhkasjdh',
            'accepted' => 1,
            'begin_date' => now(),
            'end_date' => now()->addHours(2),
        ],[
            'name' => 'palestra susan',
            'hours' => 2,
            'event_id' => 1,
            'level' => 'Facil',
            'abstract' => 'kajsdhjkashd',
            'description' => 'asmdhkasjdh',
            'accepted' => 1,
            'begin_date' => now(),
            'end_date' => now()->addHours(2),
        ],[
            'name' => 'palestra marlo',
            'hours' => 2,
            'event_id' => 1,
            'level' => 'Facil',
            'abstract' => 'kajsdhjkashd',
            'description' => 'asmdhkasjdh',
            'accepted' => 1,
            'begin_date' => now(),
            'end_date' => now()->addHours(2),
        ],[
            'name' => 'palestra artur',
            'hours' => 2,
            'event_id' => 1,
            'level' => 'Facil',
            'abstract' => 'kajsdhjkashd',
            'description' => 'asmdhkasjdh',
            'accepted' => 1,
            'begin_date' => now(),
            'end_date' => now()->addHours(2),
        ]];
        foreach ($activities as $ac) {
            sleep(1);
            Activity::create($ac);
        }
    }
}
