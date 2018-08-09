<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipoDocumentoId');
            $table->string('numeroDocumento', 10);
            $table->integer('departamentoDocumentoId');
            $table->integer('ciudadDocumentoId');
            $table->string('apellido1', 15);
            $table->string('apellido2', 15);
            $table->string('nombre1', 15);
            $table->string('nombre2', 15); 
            $table->integer('anioRegistro');
            $table->integer('ciudadInstitucionId');
            $table->integer('institucionId');
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
        Schema::dropIfExists('alumnos');
    }
}
