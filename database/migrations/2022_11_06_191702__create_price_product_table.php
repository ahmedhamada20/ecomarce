<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('packet')->nullable();
            $table->string('stock')->nullable();
            $table->string('seeds_one')->nullable();
            $table->string('seeds_two')->nullable();
            $table->string('seeds_there')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('packet');
            $table->dropColumn('stock');
            $table->dropColumn('seeds_one');
            $table->dropColumn('seeds_two');
            $table->dropColumn('seeds_there');
        });
    }
}
