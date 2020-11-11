<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_messages', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->bigInteger('message_id')->unsigned();
            $table->foreign('message_id')->references('id')->on('messages');

            $table->boolean('is_read')->default(false)->index();
            $table->boolean('stared')->default(false);

            $table->date('read_time')->index();
            $table->enum('place_hodler', ['inbox', 'send', 'draft', 'trash', 'spam']);

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
        Schema::dropIfExists('user_messages');
    }
}
