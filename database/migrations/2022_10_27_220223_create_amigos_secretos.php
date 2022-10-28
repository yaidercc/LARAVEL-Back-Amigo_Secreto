<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmigosSecretos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amigos_secretos', function (Blueprint $table) {
            $table->id('id_amigos_secreto');
            $table->unsignedBigInteger("id_empleado_fk");
            $table->unsignedBigInteger("id_amigo_secreto");
            $table->foreign('id_empleado_fk')->references('id_empleado')->on('empleados')->onDelete('cascade');
            $table->foreign('id_amigo_secreto')->references('id_empleado')->on('empleados')->onDelete('cascade');
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
        Schema::dropIfExists('amigos_secretos');
    }
}
