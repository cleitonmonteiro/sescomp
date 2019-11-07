<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            // admin rules
            'create-event',
            'choose-support',
            // speakers rules
            'acess-activities-status',
            'add-files-activities',
            // suport rules
            'verify-submitions',
            'launch-activities',
        ];
    }
}
