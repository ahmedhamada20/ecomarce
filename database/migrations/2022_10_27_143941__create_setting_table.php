<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->longText('address')->nullable();
            $table->longText('dicration')->nullable();
            $table->longText('meat_tag')->nullable();
            $table->longText('meat_dicration')->nullable();
            $table->longText('map_ifarme')->nullable();
            $table->longText('play_store')->nullable();
            $table->longText('app_store')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            //
        });
    }
}
