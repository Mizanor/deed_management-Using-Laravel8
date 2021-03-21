<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->text('logo')->nullable();
            $table->text('slider1')->nullable();
            $table->text('slider2')->nullable();
            $table->text('slider3')->nullable();
            $table->text('clintimg1')->nullable();
            $table->text('clintimg2')->nullable();
            $table->text('clintimg3')->nullable();
            $table->text('clintimg4')->nullable();
            $table->string('clinttxt1')->nullable();
            $table->string('clinttxt2')->nullable();
            $table->string('clinttxt3')->nullable();
            $table->string('clinttxt4')->nullable();
            $table->string('clintcmnt1')->nullable();
            $table->string('clintcmnt2')->nullable();
            $table->string('clintcmnt3')->nullable();
            $table->string('clintcmnt4')->nullable();
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
        Schema::dropIfExists('images');
    }
}
