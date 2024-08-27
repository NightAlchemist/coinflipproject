<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sociodemograficos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('consentimiento_id');
            $table->integer('edad');
            $table->string('genero');
            $table->string('pais');
            $table->string('religion');
            $table->string('nivel_academico');
            $table->decimal('ingresos', 10, 2);
            $table->timestamps();

            $table->foreign('consentimiento_id')
                  ->references('id')
                  ->on('consentimientos')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sociodemograficos');
    }
};
