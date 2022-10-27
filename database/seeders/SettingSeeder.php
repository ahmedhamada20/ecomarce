<?php

namespace Database\Seeders;

use App\Models\Photo;
use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('settings')->truncate();
        Setting::create([
            'name' => 'Mig From',
            'phone' => 011111,
            'facebook' => 'facebook',
            'instagram' => 'instagram',
            'twitter' => 'twitter',
            'youtube' => 'youtube',
            'address' => 'address',
            'dicration' => 'dicration',
            'meat_tag' => 'meat_tag',
            'meat_dicration' => 'meat_dicration',
            'map_ifarme' => 'map_ifarme',
            'play_store' => 'play_store',
            'app_store' => 'app_store',
        ]);

            Photo::insert([
                'Filename'     => "site.png",
                'photoable_id' =>1,
                'photoable_type' => 'App\Models\Setting'
            ]);

        Schema::enableForeignKeyConstraints();
    }
}
