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
        Schema::create('months', function (Blueprint $table) {
            $table->id();
            $table->string('abbr')->nullable();
            $table->string('juli_w2')->nullable();
            $table->string('juli_w3')->nullable();
            $table->string('juli_w4')->nullable();
            $table->string('august_w1')->nullable();
            $table->string('august_w2')->nullable();
            $table->string('august_w3')->nullable();
            $table->string('august_w4')->nullable();
            $table->string('september_w1')->nullable();
            $table->string('september_w2')->nullable();
            $table->string('september_w3')->nullable();
            $table->string('september_w4')->nullable();
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
        Schema::dropIfExists('months');
    }
};
