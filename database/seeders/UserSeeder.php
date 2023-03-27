<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Roles
        //create roles
        $adminRole = Role::create(['name' => 'admin']);
        $moderatorRole = Role::create(['name' => 'moderator']);
        $studentRole = Role::create(['name' => 'student']);

//        //create permissions
//        $createPostPermission = Permission::create(['name' => ' post']);
        $creatAdminPermission = Permission::create(['name' => 'is admin']);


//        //Give Permissions
//        $adminRole->givePermissionTo($createPostPermission);



        //Main System User
        $mainUserOne = \App\Models\User::create([
           'first_name' => 'Collins',
           'last_name' => 'Muli',
           'email' => 'Collins@domain.com',
            'password' => Hash::make('password'),
        ]);

        $mainUserTwo = \App\Models\User::create([
            'first_name' => 'Shadrack',
            'last_name' => 'Ongera',
            'email' => 'Shadrack@domain.com',
            'password' => Hash::make('password'),
        ]);

        $mainUserOne->assignRole($adminRole);
        $mainUserTwo->assignRole($adminRole);

    }
}
