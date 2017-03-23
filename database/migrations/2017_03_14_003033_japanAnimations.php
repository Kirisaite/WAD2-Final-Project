<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JapanAnimations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('japan_animations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('aName', 50);
            $table->string('genre', 50);
            $table->text('description');
            $table->text('background');
            $table->string('seasonAired', 10);
            $table->string('studio', 50);
            $table->integer('dateAired');
            $table->integer('numberOfEp');
            $table->string('status', 10);
            $table->string('image', 50);
            $table->string('mime');
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
        Schema::dropIfExists('japan_animations');
    }
}
