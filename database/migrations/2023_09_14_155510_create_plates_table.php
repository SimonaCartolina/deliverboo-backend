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
        Schema::create('plates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('image');
            $table->text('description');
            $table->float('price', 4, 2);
            $table->string('slug')->default('');
            $table->boolean('visible')->default(1);
            $table->unsignedBigInteger('restaurant_id')->nullable();
            $table->foreign('restaurant_id')
                ->references('id')
                ->on('restaurants');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('plates', function (Blueprint $table) {
            $table->dropForeign(['id_restaurant']);
        });
        Schema::dropIfExists('plates');
    }
};
