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
        Schema::table('estudiantes', function (Blueprint $table) {
            $table->dropColumn(['calificaciones', 'genero']);
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('estudiantes', function (Blueprint $table) {
            $table->json('calificaciones')->nullable();
            $table->enum('genero', ['masculino', 'femenino', 'otro']);
        });
    }
};
