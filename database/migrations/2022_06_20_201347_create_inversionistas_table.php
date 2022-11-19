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
        Schema::create('inversionistas', function (Blueprint $table) {
            $table->id();
            $table->text('propuesta');
            $table->unsignedBigInteger('emprendimiento_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();

            $table->foreign('emprendimiento_id')->references('id')->on('emprendimientos')
            ->onDelete('set null');

            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::dropIfExists('inversionistas');
    }
};
