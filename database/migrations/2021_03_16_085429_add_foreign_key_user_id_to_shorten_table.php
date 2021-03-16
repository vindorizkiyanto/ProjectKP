<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyUserIdToShortenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shorten', function (Blueprint $table) {
            $table->string('link_qrcode');
            //$table->unsignedBigInteger('user_id');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shorten', function (Blueprint $table) {
            //
            $table->dropColumn(['user_id', 'link_qrcode']);
        });
    }
}
