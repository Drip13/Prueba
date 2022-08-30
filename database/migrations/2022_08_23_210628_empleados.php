<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Empleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nombre1');
            $table->string('apellido1');
            $table->string('apellido2')->nullable();
            $table->string('emailempleado')->unique();
            $table->bigInteger('telempleado');
            $table->bigInteger('empresa_id')->unsigned();

            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
