<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id(); // Columna 1: Primary key (Tipo: Big Integer)
            $table->string('nombre', 100); // Columna 2: String con longitud
            $table->integer('edad')->unsigned(); // Columna 3: Integer sin signo (Modificador: unsigned)
            $table->date('fecha_nacimiento'); // Columna 4: Date
            $table->boolean('activo')->default(true); // Columna 5: Boolean con valor por defecto (Modificador: default)
            $table->decimal('promedio', 5, 2)->nullable(); // Columna 6: Decimal con precisión (Modificador: nullable)
            $table->enum('genero', ['masculino', 'femenino', 'otro']); // Columna 7: Enum
            $table->json('calificaciones')->nullable(); // Columna 8: JSON (Modificador: nullable)
            $table->timestamps(); // Columnas 9 y 10: created_at y updated_at (Modificador: timestamps)
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
};
