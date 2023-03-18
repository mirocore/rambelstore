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

            $table->string("name");
            $table->text("description")->nullable();
            $table->decimal('price', 7, 2)->nullable();
            $table->decimal('promo', 7, 2)->nullable();
            $table->integer("state");
            $table->integer("important");
            $table->unsignedBigInteger('id_category');

            $table->foreign('id_category')->references('id')->on('categories')->onDelete('cascade');

            $table->timestamps();
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
