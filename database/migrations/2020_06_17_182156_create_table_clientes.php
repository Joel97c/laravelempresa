<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->String('nombre1',50)->nullable();
            $table->String('nombre2',50)->nullable();
            $table->String('apellido1',50)->nullable();
            $table->String('apellido2',50)->nullable();
            $table->String('cedula',20)->unique();
            $table->String('direccion',50)->nullable();
            $table->String('estado')->default('ACTIVO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_clientes');
    }
}
