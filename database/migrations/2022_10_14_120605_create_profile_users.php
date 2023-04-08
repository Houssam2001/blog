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
        Schema::create('profile_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('province');
            $table->integer('user_id')->unsigned();
            $table->longText('bio');
            $table->longText('facebook');
            $table->string('gender');
            $table->timestamps();
            $table->foreign('user_id')->refrences('id')->on('users')
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
        Schema::dropIfExists('profile_users');
    }
};
