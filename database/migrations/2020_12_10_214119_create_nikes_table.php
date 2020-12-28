<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nikes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60);
            $table->string('brand', 60);
            $table->string('nickname', 60);
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
        Schema::dropIfExists('nikes');
    }
}
