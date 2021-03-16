<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryShortenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_shorten', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address', 255)->nullable();
            $table->string('mac_address', 255)->nullable();
            $table->foreignId('shorten_id')->constrained('shorten')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('history_shorten');
    }
}
