<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professeurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();//nom prenom email cin image telephone date_recrutement date_naissance specialite appartenant_a_ENSAJ Dossier_scientifique Dossier_Pedagogique Dossier_administratif
            $table->string('prenom')->nullable();
            $table->string('email')->nullable();
            $table->string('cin')->nullable();
            $table->string('image')->nullable();
            $table->integer('telephone')->nullable();
            $table->date('date_recrutement')->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('specialite')->nullable();
            $table->string('appartenant_a_ENSAJ')->nullable();
            $table->string('Dossier_scientifique')->nullable();
            $table->string('Dossier_Pedagogique')->nullable();
            $table->string('Dossier_administratif')->nullable();
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
        Schema::dropIfExists('professeurs');
    }
}
