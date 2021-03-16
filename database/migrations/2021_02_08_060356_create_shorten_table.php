<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShortenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shorten', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('judul');
            $table->longText('long_url');
            $table->longText('short_url')->unique();
            $table->longText('custom_url');
            $table->longText('random')->unique();
            $table->timestamps();
        });

        // Schema::table('shorten', function (Blueprint $table) {
        //     $table->foreign('user_id')->references('id')->on('users')
        //         ->onDelete('cascade')->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shorten');
    }
}
