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
            $table->unsignedBigInteger('filter_id');
            $table->string('title');
            $table->text('description');
            $table->string('image');
            $table->string('model');
            $table->string('category');
            $table->string('manufacturer')->nullable()->default('default');;
            $table->string('brand')->nullable()->default('default');;
            $table->string('origin')->nullable()->default('default');;
            $table->string('stock')->nullable();
            $table->tinyInteger('status')->default('1');
            $table->timestamps();

            $table->foreign('filter_id')->references('id')->on('filters')->onDelete('cascade');

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
