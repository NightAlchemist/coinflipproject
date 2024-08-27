<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResWorksTable extends Migration
{
    public function up()
    {
        Schema::create('res_works', function (Blueprint $table) {
            $table->id();
            $table->string('interes_resultados');
            $table->string('inscripcion_taller');
            $table->string('correo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('res_works');
    }
}
