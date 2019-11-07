<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateSpeakerUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'mateus',
            'email' => 'mateus@gmail.com',
            'password' => bcrypt('123456789')
        ]);

        $role = Role::create(['name' => 'Speaker']);

        $permissions = Permission::pluck('id','name')->all();
        $chosed =[ 
            $permissions['acess-activities-status']=>$permissions['acess-activities-status'],
            $permissions['add-files-activities']=>$permissions['add-files-activities']
        ];

        $role->syncPermissions($chosed);
        $user->assignRole([$role->id]);
    }
}
