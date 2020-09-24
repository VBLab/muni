<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpruntsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprunts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('AdherentId');
            $table->foreign('AdherentId')
                  ->references('id')
                  ->on('adherent')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->unsignedBigInteger('BookId');
            $table->foreign('BookId')
                  ->references('id')
                  ->on('book')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->dateTime('DateEmprunt');
            $table->dateTime('RenduLe')->nullable();
            $table->dateTime('DateRetour');
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
        Schema::dropIfExists('emprunts');
    }
}
