<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibroPrestamoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro_prestamo', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('usuario_id'); 
            //$table->foreign('usuario_id','fk_libro_prestamo_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');

            $table->unsignedBigInteger('libro_id'); 
            //$table->foreign('libro_id','fk_libroprestamo_libro')->references('id')->on('libro')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('libro_id')->references('id')->on('libro')->onDelete('restrict')->onUpdate('restrict');

            $table->date('fecha_prestamo');
            $table->string('prestado_a');
            $table->boolean('estado');
            $table->date('fecha_devolucion')->nullable();
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
        Schema::dropIfExists('libro_prestamo');
    }
}
