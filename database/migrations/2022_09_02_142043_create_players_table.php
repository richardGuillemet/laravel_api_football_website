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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('prenom', 64);
            $table->string('nom', 64);
            $table->date('date_naissance');
            $table->integer('age');
            $table->string('nationalite', 64);
            $table->text('presentation');
            $table->string('photo', 64);
            $table->unsignedBigInteger('club_id');
            $table->foreign('club_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
};
