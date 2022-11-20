<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('type_prodcuts', function (Blueprint $table) {
            $table->enum('type_product',['seeds','g','kg','l','ml','m','cm','pcs','set','mlm'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('type_prodcuts', function (Blueprint $table) {
            $table->dropColumn('type_product');
        });
    }
}
