<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            $table->date('nascimento');
            $table->binary('curriculo');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.cd
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dados');
    }
}
