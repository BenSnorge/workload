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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('card1_icon');
            $table->string('card1_heading');
            $table->string('card1_description');
            $table->string('card2_icon');
            $table->string('card2_heading');
            $table->string('card2_description');
            $table->string('card3_icon');
            $table->string('card3_heading');
            $table->string('card3_description');
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
        Schema::dropIfExists('cards');
    }
};
