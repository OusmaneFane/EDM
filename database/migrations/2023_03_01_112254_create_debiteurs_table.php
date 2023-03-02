<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDebiteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debiteurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom_deb');
            $table->string('prenom_deb');
            $table->string('type_deb');
            $table->string('adresse_deb');
            $table->string('num_deb');
            $table->string('num_compteur');
            $table->string('num_facture');
            $table->string('date_facture');
            $table->string('montant_recouvrer');
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
        Schema::dropIfExists('debiteurs');
    }
}
