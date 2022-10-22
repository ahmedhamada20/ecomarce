<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('days')->nullable();
            $table->string('life_cycle')->nullable();
            $table->string('disease')->nullable();
            $table->string('hybrid')->nullable();
            $table->longText('section_one')->nullable();
            $table->longText('section_two')->nullable();
            $table->longText('section_there')->nullable();
            $table->decimal('price',8,2);
            $table->string('quantity')->default(1);
            $table->text('notes')->nullable();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('sub_category_id')->constrained('sub_categories')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('products');
    }
}
