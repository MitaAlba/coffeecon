<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('name',50);
            $table->string('description',100);
            $table->string('image_1');
            $table->string('image_2');
            $table->string('image_3');
            $table->double('price', 5, 2);
            $table->foreignId('size_id');
            $table->string('status');


            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('size_id')->references('id')->on('sizes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
