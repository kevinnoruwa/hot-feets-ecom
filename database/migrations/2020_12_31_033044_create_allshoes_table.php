<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllshoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allshoes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60);
            $table->string('brand', 60);
            $table->string('nickname', 60)->nullable();
            $table->boolean('newarrival')->default(0);
            $table->boolean('extra')->default(0);
            $table->boolean('cloth')->default(0);
            $table->string('image', 255);
            $table->double('price',10,2);
            $table->string('color', 60);
            $table->longtext('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('allshoes');
    }
}
