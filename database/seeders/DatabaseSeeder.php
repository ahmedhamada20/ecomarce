<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        User::create([
            'name' => 'admin',
            'email'=> 'admin@mig.com',
            'password'=>Hash::make(123456789),
            'is_admin'=>1,
        ]);

        $this->call(CategorySeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
