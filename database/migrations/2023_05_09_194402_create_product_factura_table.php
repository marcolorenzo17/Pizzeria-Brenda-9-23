<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('product_factura', function (Blueprint $table) {
            $table->foreignId('factura_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->integer('cantidad')->default(1);
            $table->primary(['factura_id', 'product_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('product_factura');
    }
};
