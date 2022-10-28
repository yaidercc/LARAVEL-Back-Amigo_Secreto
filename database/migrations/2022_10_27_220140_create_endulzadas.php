<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEndulzadas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endulzadas', function (Blueprint $table) {
            $table->id('id_endulzadas');
            $table->date("fecha_endulzadas");
            $table->string("lugar_endulzada");
            $table->unsignedBigInteger("id_grupo_fk");
            $table->foreign('id_grupo_fk')->references('id_grupo')->on('grupos')->onDelete('cascade');
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
        Schema::dropIfExists('endulzadas');
    }
}
