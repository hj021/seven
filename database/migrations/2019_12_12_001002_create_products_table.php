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
            $table->bigIncrements('id');
            $table->text('title');
            $table->string('color');
            $table->unsignedInteger('price');
            $table->string('size')->nullable();
            $table->string('artist');
            $table->string('pics')->nullable();
            $table->unsignedInteger('category_id')->default(0);
            $table->smallInteger('available')->default(1);
            $table->unsignedInteger('count')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('category_id')
            ->references('id')
            ->on('categories');
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
