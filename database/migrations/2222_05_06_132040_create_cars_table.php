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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('manufacturers_id')->constrained()->onDelete('cascade');
            $table->string('model', 50);
            $table->integer('year'); 
            $table->string('engine', 50);
            $table->integer('price');
            $table->integer('discount')->default(0);
            $table->string('transmission', 50);
            $table->string('power', 50);
            $table->string('color', 20);
            $table->integer('door');
            $table->string('properties', 255)->nullable();
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
        Schema::table('cars', function (Blueprint $table) {
            $table->dropColumn('image'); 
        });
    }
};
