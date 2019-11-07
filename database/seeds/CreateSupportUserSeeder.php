<?php

use Illuminate\Database\Seeder;

class CreateSupportUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'artur',
            'email' => 'artur@gmail.com',
            'password' => bcrypt('123456789')
        ]);

        $role = Role::create(['name' => 'Support']);

        $permissions = Permission::pluck('id','name')->all();
        $chosed =[ 
            $permissions['verify-submitions']=>$permissions['verify-submitions'],
            $permissions['launch-activities']=>$permissions['launch-activities']
        ];

        $role->syncPermissions($chosed);
        $user->assignRole([$role->id]);
    }
}
