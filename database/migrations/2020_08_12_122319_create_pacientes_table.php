<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('apellido', 50);
            $table->string('nombre', 50);
            $table->string('documento', 50);
            $table->string('fecha_nacimiento', 30);
            $table->string('sexo', 10);
            $table->string('estado_civil', 15);
            $table->string('domicilio', 100);
            $table->string('telefono', 30);
            $table->string('celular', 30);
            $table->string('email', 80)->unique();
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
        Schema::dropIfExists('pacientes');
    }
}
