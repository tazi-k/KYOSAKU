<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->unsignedBigInteger('age')->nullable();
            $table->text('profile')->nullable();
            $table->text('sns_link')->nullable();
            $table->text('work_link')->nullable();
            $table->text('collaboration_link')->nullable();
            $table->unsignedBigInteger('prefectures_id')->nullable();

            $table->text('image_path')->nullable();
            $table->text('public_id')->nullable();

            $table->foreign('prefectures_id')
                ->references('id')
                ->on('prefectures')
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
        Schema::dropIfExists('users');
    }
}
