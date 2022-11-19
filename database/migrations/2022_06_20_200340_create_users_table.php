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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('nombre');
            $table->string('apellidos');
            $table->bigInteger('telefono');
            $table->bigInteger('numero_documento');
            $table->string('direccion');
            $table->unsignedBigInteger('tipodocumento_id')->nullable();
            $table->unsignedBigInteger('ciudade_id')->nullable();
            $table->unsignedBigInteger('genero_id')->nullable();
            $table->unsignedBigInteger('tipopersona_id')->nullable();
            $table->string('foto_perfil')->nullable();
            $table->timestamp('email_verified_at')->nullable();

            $table->foreign('tipodocumento_id')->references('id')->on('tipodocumentos')
                ->onDelete('set null');

            $table->foreign('ciudade_id')->references('id')->on('ciudades')
                ->onDelete('set null');

            $table->foreign('genero_id')->references('id')->on('generos')
                ->onDelete('set null');

            $table->foreign('tipopersona_id')->references('id')->on('tipopersonas')
                ->onDelete('set null');

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
        Schema::dropIfExists('users');
    }
};
