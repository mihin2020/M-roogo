<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAjoutBiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ajout_biens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type_biens');
            $table->string('localisation');
            $table->string('nbre_piece');
            $table->integer('toilette')->nullable();
            $table->string('garage')->nullable();
            $table->string('courant');
            $table->string('assainissement');
            $table->string('plafond');
            $table->string('carreaux');
            $table->string('meuble')->nullable();
            $table->integer('prix');
            $table->text('description')->nullable();
            $table->string('statut');
            $table->integer('caution')->nullable();
            $table->integer('avance')->nullable();
            $table->integer('prestation')->nullable();
            $table->string('picture')->nullable();
            $table->string('available')->default('Disponible');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ajout_biens');
    }
}
