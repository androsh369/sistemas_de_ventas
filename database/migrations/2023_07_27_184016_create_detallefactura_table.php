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
        Schema::create('deatellefactura', function (Blueprint $table) {
            $table->id();
            $table->decimal('precio');
            $table->timestamps();

            $table->biginteger('productos_id')->unsigned();
            $table->biginteger('factura_id')->unsigned();


            $table->foreign('productos_id')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('factura_id')->references('id')->on('factura')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deatellefactura');
    }
};
