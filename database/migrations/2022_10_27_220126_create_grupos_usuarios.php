<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos_usuarios', function (Blueprint $table) {
            $table->id('id_grupos_usuarios');
            $table->unsignedBigInteger("id_empleado_fk");
            $table->unsignedBigInteger("id_grupo_fk");
            $table->foreign('id_grupo_fk')->references('id_grupo')->on('grupos')->onDelete('cascade');
            $table->foreign('id_empleado_fk')->references('id_empleado')->on('empleados')->onDelete('cascade');
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
        Schema::dropIfExists('grupos_usuarios');
    }
}
