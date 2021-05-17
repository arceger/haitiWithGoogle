<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssociadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('est_civel');
            $table->string('endereco');
            $table->string('telefone');
            $table->string('email')->unique();
            $table->string('telefone_rec');
            $table->string('cidade');
            $table->string('estado');
            $table->string('description');
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
        Schema::dropIfExists('associados');
    }
}
