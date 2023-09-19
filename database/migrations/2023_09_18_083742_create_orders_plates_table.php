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
        Schema::create('orders_plates', function (Blueprint $table) {
            $table->unsignedBigInteger('id_order');
            $table->foreign('id_order')->references('id')->on('orders');

            $table->unsignedBigInteger('id_plate');
            $table->foreign('id_plate')->references('id')->on('plates');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders_plates', function (Blueprint $table) {
            $table->dropForeign(['id_order']);
            $table->dropForeign(['id_plate']);
        });
        Schema::dropIfExists('orders_plates');
    }
};
