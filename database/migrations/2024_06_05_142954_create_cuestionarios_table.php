<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cuestionarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('consentimiento_id'); // Cambio para referenciar al consentimiento
            $table->unsignedInteger('serie'); // Campo para la serie
            $table->enum('prediccion', ['acertar', 'errar']); // Campo para la predicción (Acertar o Errar)
            $table->tinyInteger('nivel_confianza')->unsigned(); // Campo para el nivel de confianza (1-7)
            $table->text('razonamiento'); // Campo para el razonamiento o motivo
            $table->timestamps();

            // Definición de la llave foránea
            $table->foreign('consentimiento_id')
                  ->references('id')
                  ->on('consentimientos')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuestionarios');
    }
};
