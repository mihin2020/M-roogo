<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('ajoutbien_id');
            $table->unsignedBigInteger('locataire_id');
            $table->string('type_bail');
            $table->integer('loyer');
            $table->date('date_bail');
            $table->date('date_entre');
           
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('ajoutbien_id')
            ->references('id')
            ->on('ajout_biens')
            ->onDelete('cascade');

            $table->foreign('locataire_id')
            ->references('id')
            ->on('locataires')
            ->onDelete('cascade');

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
        Schema::dropIfExists('locations');
    }
}
