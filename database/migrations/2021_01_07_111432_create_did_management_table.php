<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDidManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('did_management', function (Blueprint $table) {
            $table->id();
            $table->integer('sl')->nullable();
            $table->string('name');
            $table->string('clintname');
            $table->date('regisryDAte')->nullable();
            $table->string('deedtype')->nullable();
            $table->string('mouja')->nullable();
            $table->string('cost')->nullable();
            $table->string('deedSerial')->nullable();
            $table->text('moshabidda')->nullable();

            $table->string('writer')->nullable();
            $table->text('token')->nullable();
            $table->text('file')->nullable();
            $table->text('file1')->nullable();
            $table->string('phone')->nullable();
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
        Schema::dropIfExists('did_management');
    }
}
