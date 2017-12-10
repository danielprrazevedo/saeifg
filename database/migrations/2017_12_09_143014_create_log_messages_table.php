<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('message_id');
            $table->foreign('message_id')->references('id')->on('messages');
            $table->text('message');
            $table->char('receiver', '1'); //Quem vai receber a mensagem: S => Sender, R => Receiver
            $table->dateTime('visualized')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_messages');
    }
}
