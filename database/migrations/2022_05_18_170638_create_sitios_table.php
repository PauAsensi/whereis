<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitios', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->string('titulo') ; 
            $table->text('descripcion');
            $table->time('h_apertura');
            $table->time('h_cierre');
            $table->string('direccion');
            $table->foreignId('user_id');
            $table->string('imagen'); 
            $table->integer('valoracion');              
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
        Schema::dropIfExists('sitios');
    }
};
