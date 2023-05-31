<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idValoracion')->nullable();
            $table->foreign('idValoracion')
                ->references('id')->on('valoraciones')->onDelete('cascade');
            $table->bigInteger('idUser')->nullable();
            $table->foreign('idUser')
                ->references('id')->on('users')->onDelete('cascade');
            $table->text('resenia')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
