<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesCcBccsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages_cc_bccs', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('message_id')->unsigned();
            $table->foreign('message_id')->references('id')->on('messages');

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->enum('bcc_cc', ['bcc', 'cc'])->default('bcc');
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
        Schema::dropIfExists('messages_cc_bccs');
    }
}
