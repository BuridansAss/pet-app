<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSorcerersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sorcerers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('user_id'); //не для ботов
            $table->integer('level');
            $table->bigInteger('exp');
            $table->json('bag');
            $table->integer('weapon_id');
            $table->integer('armor_id');
            $table->json('spells');
            $table->integer('place');
            $table->boolean('finding');
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
        Schema::dropIfExists('sorcerers');
    }
}
