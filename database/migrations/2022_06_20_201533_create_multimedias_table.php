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
        Schema::create('multimedia', function (Blueprint $table) {
            $table->id();
            $table->text('url_contenido');
            $table->unsignedBigInteger('multimediaable_id');
            $table->string('multimediaable_type');
            // $table->unsignedBigInteger('publicacion_id')->nullable();

            // $table->foreign('publicacion_id')->references('id')->on('publicaciones')
            //     ->onDelete('set null')->onUpdate('set null');
            
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
        Schema::dropIfExists('multimedia');
    }
};
