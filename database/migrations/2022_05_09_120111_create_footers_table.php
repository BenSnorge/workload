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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('footer_header1')->nullable();
            $table->string('footer_header2')->nullable();
            $table->string('footer_link1')->nullable();
            $table->string('footer_link2')->nullable();
            $table->string('footer_link3')->nullable();
            $table->string('footer_link4')->nullable();
            $table->string('footer_link5')->nullable();
            $table->string('footer_linn6')->nullable();
            $table->string('footer_link7')->nullable();
            $table->string('footer_link8')->nullable();
            $table->string('footer_city')->nullable();
            $table->string('footer_street')->nullable();
            $table->string('footer_zipcode')->nullable();
            $table->string('footer_phone')->nullable();
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
        Schema::dropIfExists('footers');
    }
};
