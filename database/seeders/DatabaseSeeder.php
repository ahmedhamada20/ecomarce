<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SettingSeeder::class);
        $this->call(PermissionTableSeeder::class);
       $user = User::create([
            'name' => 'admin',
            'email'=> 'admin@mig.com',
            'password'=>Hash::make(123456789),
            'is_admin'=>1,
        ]);


        $role = Role::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
        $this->call(CategorySeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
