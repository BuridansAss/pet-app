<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArenasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arenas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('arenatype_id');
            $table->json('slots');
            $table->integer('priority');
            $table->integer('arena_id');
            $table->integer('condition_id');
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
        Schema::dropIfExists('arenas');
    }
}
