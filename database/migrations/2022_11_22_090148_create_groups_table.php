<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->longText('shop')->nullable();
            $table->longText('payment')->nullable();
            $table->longText('customer_support')->nullable();
            $table->longText('contact_Us')->nullable();
            $table->longText('satisfaction_guarantee')->nullable();
            $table->longText('shipping')->nullable();
            $table->longText('commercial_sales')->nullable();
            $table->longText('wishlist')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
