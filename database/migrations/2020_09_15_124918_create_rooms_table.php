<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('to_user_id');
            $table->unsignedBigInteger('from_user_id');
            $table->timestamps();

            $table->foreign('to_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('from_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
