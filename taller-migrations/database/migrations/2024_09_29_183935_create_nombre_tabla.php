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
            $table->id(); 
            $table->string('nombre', 100); 
            $table->integer('edad')->unsigned(); 
            $table->date('fecha_nacimiento'); 
            $table->boolean('activo')->default(true); 
            $table->decimal('promedio', 5, 2)->nullable(); 
            $table->enum('genero', ['masculino', 'femenino', 'otro']); 
            $table->json('calificaciones')->nullable(); 
            $table->timestamps(); 
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
