<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
              $table->string('slug')->unique();
              $table->integer('qty');
              $table->integer('price');
              $table->longText('desc');
              $table->string('thumbnail');
              $table->string('first_image')->nullable();
              $table->string('second_image')->nullable();
              $table->string('third_image')->nullable();
              $table->string('status')->default(1);

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
};